<?php
// CHANGE IT!
define( 'XOONEWS_PASSWORD', $password );
// SET IT TO THE URL OF THE CODE FILE
//define( 'XOONEWS_CODE_URL', 'http://localhost:8101/xoonews/inc/_xoonews.php' );
define( 'XOONEWS_CODE_URL', $xoomvc_url );
define( 'XOONEWS_AUTHOR_BLOG', $website_author );
// COOKIE STUFF, MOST PROBABLY YOU DON'T NEED TO CHANGE THIS
define( 'XOONEWS_COOKIE_NAME', 'xoonews-loggedin' );
define( 'XOONEWS_COOKIE_EXPIRES', 3600 ); // in seconds
define( 'DATAFILE', $xoomvc_dir.'\assets\json\xoonews-data.list');
// TEMPLATES - CHANGES ARE WELCOME BUT DO BE CAREFUL, THERE ARE SOME REQUIRED CODE THERE
// THE MAIN NEWS CONTAINER
$NEWS_LIST = <<<EOT
{ADD_LINK}
{LOGIN_LINK}
<div id="xoonews-addForm" style="display: none;">
	<div class="large-12 columns">
		<h3>Ajouter un article</h3>
		<form method="post" action="{CODE_URL}">
			<input type="hidden" name="xoonews_action" value="add">
			<input type="text" name="subject" value="" placeholder="Titre - Sujet"><br>
			<textarea class="editor" rows="15" name="message" placeholder="Nouveau texte"></textarea><br>
			<p class="text-center"><input class="button small" type="submit" value="Ajouter">   <a href="" class="button small warning" title="">Annuler</a></p>
		</form>
	</div>
</div>
<div id="xoonews-loginForm" style="display: none;">
	<div class="large-12 columns text-center">
		<form method="post" action="{CODE_URL}">
			<input type="hidden" name="xoonews_action" value="login">
			<div class="row">
				<div  class="small-5 small-centered columns">
					<input class="text-center" type="password" name="password" placeholder="••••••••••••" aria-describedby="password" required />
					<span class="form-error">I'm required !</span>
					<input class="button small" type="submit" value="Valider" />
				</div>
			</div>
		</form>
	</div>
</div>
{NEWS_ITEMS}
EOT;
// INDIVIDUAL NEWS ITEM CONTAINER
$NEWS_ITEM = <<<EOT
<hr>
<article id="xoonews-view-{ITEM_ID}">
	<h3><a href="#"  title="">{SUBJECT}</a></h3>
	<h6>Ecrit par <a href="#" title="">{AUTHOR_BLOG}</a>, le {DATE}.</h6>
	<div>{MESSAGE}</div>
	<p>{EDIT_LINKS}</p>
</article>

<div id="xoonews-edit-{ITEM_ID}" style="display: none;">
	<div class="large-12 columns">
		<h3>Editer</h3>
		<form method="post" action="{CODE_URL}">
			<input type="hidden" name="xoonews_action" value="update">
			<input type="hidden" name="id" value="{ITEM_ID}">
			<input type="text" size="48" value="{FORM_SUBJECT}" name="subject">
			<textarea class="editor"  rows="15" name="message">{MESSAGE}</textarea><br>
			<p class="text-center"><input class="button small" type="submit" value="Mettre à jour">   <a href="" class="button small warning" title="">Annuler</a></p>
		</form>
	</div>
</div>
EOT;

$JAVASCRIPT = <<<EOT
<script>
function xoonews_HideElement( elementName ){
	ele = document.getElementById( elementName );
	if( ! ele ){
		alert( 'cannot find ' + elementName );
		return;
		}
	ele.style.display = "none";
	}
function xoonews_ShowElement( elementName ){
	ele = document.getElementById( elementName );
	if( ! ele ){
		alert( 'cannot find ' + elementName );
		return;
		}
	ele.style.display = "block";
	}
</script>
EOT;
/* PROCESS ACTION */
$action = ( isset($_REQUEST['xoonews_action']) ) ? $_REQUEST['xoonews_action'] : '';
if( $action ){
	$xoonews = new xooNews;
	// NO ACTION IF NOT LOGGED IN
	if( $xoonews->isLoggedIn() || ($action == 'login') ){
		switch( $action ){
			case 'login':
				$password = $_POST['password'];
				if( $xoonews->checkPassword($password) )
					$xoonews->doLogin();
				else {
					$xoonews->displayError( 'Incorrect Password!' );
					exit;
					}
				break;
			case 'logout':
				$xoonews->doLogout();
				break;
			case 'add':
				$newItem = $xoonews->grabData();
				$xoonews->addItem( $newItem );
				$xoonews->save();
				break;
			case 'update':
				$newItem = $xoonews->grabData();
				$itemId = $newItem['id'];
				$xoonews->updateItem( $itemId, $newItem );
				$xoonews->save();
				break;
			case 'delete':
				$itemId = $_REQUEST['id'];
				$xoonews->deleteItem( $itemId );
				$xoonews->save();
				break;
			}
		}
	/* REDIRECT BACK TO THE REFERRER */
	$referrer = $_SERVER['HTTP_REFERER'];
	header( "Location: $referrer" );
	exit;
	}
class xooNews {
	var $news = array();
	function xooNews(){
		$this->news = array();
		$this->load();
		}
	function checkPassword( $pass ){
		if( $pass == XOONEWS_PASSWORD )
			return true;
		else
			return false;
		}
	function doLogin(){
		setcookie( XOONEWS_COOKIE_NAME, '1', time() + XOONEWS_COOKIE_EXPIRES );
		}
	function doLogout(){
		setcookie( XOONEWS_COOKIE_NAME, '', time() -1 );
		}
	function isLoggedIn(){
		if( isset($_COOKIE[XOONEWS_COOKIE_NAME]) && $_COOKIE[XOONEWS_COOKIE_NAME] )
			return true;
		else
			return false;
		}
	function grabData(){
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		if( get_magic_quotes_gpc() ){
			$subject = stripslashes( $subject );
			$message = stripslashes( $message );
			}
		$itemId = isset($_POST['id']) ? $_POST['id'] : 0;

		$data = array(
			'subject'	=> $subject,
			'message'	=> $message,
			'id'		=> $itemId,
			);
		return $data;
		}
	function addItem( $item ){
//		$date = date( "j M Y H:i", time() );
//		$date = date( "j M Y g:i a", time() );
		$date = date( "j M Y", time() );
//		$date = date( "j F Y", time() );

		$item['date'] = $date;
		$this->news[] = $item;
		}
	function updateItem( $id, $newItem ){
		$item = $this->news[$id - 1];
		$item = array_merge( $item, $newItem );
		$this->news[ $id - 1 ] = $item;
		}
	function deleteItem( $id ){
		array_splice( $this->news, $id - 1, 1 );
		}
	function save(){
		// CHECK IF THE DATA FILE EXISTS
		if( ! file_exists(DATAFILE) ){
			$this->error( 'Datafile missing! Please create a new empty file <strong>' . DATAFILE . '</strong> and make chmod 666' );
			return;
			}
		// CHECK IF THE DATA FILE IS WRITABLE
		if( ! is_writable(DATAFILE) ){
			$this->error( 'Datafile is not writable! Please make chmod 666 for the <strong>' . DATAFILE . '</strong> file.' );
			return;
			}
		$this->setToFile( DATAFILE );
		}
	function load(){
		// CHECK IF THE DATA FILE EXISTS
		if( ! file_exists(DATAFILE) ){
			$this->error( 'Datafile missing! Please create a new empty file <strong>' . DATAFILE . '</strong> and make chmod 666' );
			return;
			}
		// LOAD THE DATA FILE
		$this->getFromFile( DATAFILE );
		}
	function display(){
		global $NEWS_ITEM, $NEWS_LIST, $JAVASCRIPT;
		$CODE_URL = XOONEWS_CODE_URL;
		$view = '';
		$items = '';
		$itemId = count($this->news) + 1;
		// ORDER IN REVERSE
		reset( $this->news );
		foreach( array_reverse($this->news) as $n ){
			$itemId--;
			if( $this->isLoggedIn() ){
				$editLinks = <<<EOT
			<div class="button-group">
				<a class="button small" href="#" onclick="xoonews_ShowElement('xoonews-edit-$itemId'); xoonews_HideElement('xoonews-view-$itemId'); return false;">Editer</a>
				<a class="button small alert" href="$CODE_URL&xoonews_action=delete&id=$itemId" onclick="return confirm('Are you sure to delete this news item?')">Effacer</a>
			</div>
EOT;
				}
			else {
				$editLinks = '';
				}
			$formSubject = htmlentities( $n['subject'] );
			$replaces = array(
				'{SUBJECT}'			=> $n['subject'],
				'{FORM_SUBJECT}'	=> $formSubject,
				'{DATE}'			=> $n['date'],
				'{MESSAGE}'			=> $n['message'],
				'{ITEM_ID}'			=> $itemId,
				'{EDIT_LINKS}'		=> $editLinks,
				'{CODE_URL}'		=> XOONEWS_CODE_URL,
				'{AUTHOR_BLOG}'		=> XOONEWS_AUTHOR_BLOG,
				);
			$itemDisplay = str_replace( array_keys($replaces), array_values($replaces), $NEWS_ITEM );
			$items .= $itemDisplay;
			}
		if( $this->isLoggedIn() ){
			$addLink = <<<EOT
<a class="button small success" id="xoonews-addBar" href="#" onclick="xoonews_ShowElement('xoonews-addForm'); xoonews_HideElement('xoonews-addBar'); return false;">Ajouter un article</a>
EOT;
			}
		else {
			$addLink = '';
			}
		if( $this->isLoggedIn() ){
			$loginLink = <<<EOT
<a class="button small secondary" href="$CODE_URL&xoonews_action=logout">Déconnexion</a>
EOT;
			}
		else {
			$loginLink = <<<EOT
<p class="text-right" style="position:fixed;top:1em;right:1em;" ><a id="xoonews-loginBar" href="#" onclick="xoonews_ShowElement('xoonews-loginForm'); xoonews_HideElement('xoonews-loginBar'); return false;"><small><i class="fa fa-lock"></i></small></a></p>
EOT;
			}
		// ADD UP OUR CREDENTIALS
		//$copyright = <<<EOT <div style="font-size: 0.75em; margin: 1em 0 0 0;">Powered by <a href="http://www.phpfastnews.com">phpXooNews</a> - fast and free news display script</div> EOT;
		//$items = $items . "\n" . $copyright;
		$items = $items . "\n";
		$replaces = array(
			'{NEWS_ITEMS}'	=> $items,
			'{ADD_LINK}'	=> $addLink,
			'{LOGIN_LINK}'	=> $loginLink,
			'{CODE_URL}'	=> XOONEWS_CODE_URL,
			);
		$view = str_replace( array_keys($replaces), array_values($replaces), $NEWS_LIST );
		$view = $JAVASCRIPT . "\n" . $view;
		return $view;
		}
	function setToFile( $fileName ){
		reset( $this->news );
		$content = '';
		foreach( $this->news as $n ){
			if( ! $n )
				continue;
			$content .= 'ITEM_START' . "\n";
			$content .= $n['date'] . "\n";
			$content .= $n['subject'] . "\n";
			$content .= $n['message'] . "\n";
			$content .= 'ITEM_END' . "\n";
			}
		setFileContent( DATAFILE, $content );
		}
	function getFromFile( $fileName ){
		$fileContentArray = file( $fileName );
		reset( $fileContentArray );
		$lineIndex = 0;
		foreach( $fileContentArray as $line ){
			$line = trim( $line );
			if( ! $line )
				continue;
			if( $line == 'ITEM_END' ){
				$this->news[] = $item;
				continue;
				}
			if( $line == 'ITEM_START' ){
				$item = array();
				$lineIndex = 1;
				}
			else {
				// PARSE LINE
				switch( $lineIndex ){
					case 1:
						$key = 'date';
						break;
					case 2:
						$key = 'subject';
						break;
					default:
						$key = 'message';
						break;
					}
				if( isset($item[$key]) )
					$item[$key] .= $line;
				else
					$item[$key] = $line;
				
				$lineIndex++;
				}
			}
		}
	function displayError( $msg ){
		echo $msg;
		/* REDIRECT BACK TO THE REFERRER */
		$referrer = $_SERVER['HTTP_REFERER'];
		echo <<<EOT
<meta http-equiv="Refresh" content="1; URL=$referrer">
EOT;
		}
	function error( $msg ){
		echo 'Error: ' . $msg;
		}
	}
function _print_r( $thing ){
	echo '<pre>';
	print_r( $thing );
	echo '</pre>';
	}
function setFileContent( $fileName, $content ){
	$length = strlen( $content );
	$f = fopen( $fileName, 'w' );
	$result = fwrite($f, $content, $length);
	fclose( $f );
	}
?>