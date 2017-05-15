<?php
	// anti XSS : /index.php/%22onmouseover=prompt(971741)%3E or /index.php/ redirects all on index.php
	// if there is a slash after the "index.php", the file is considered as a folder, but the code inside it still executed…
	if ($_SERVER['PHP_SELF'] !== $_SERVER['SCRIPT_NAME']) {
		header('Location: '.$_SERVER['SCRIPT_NAME']);
	}
	//error_reporting(0);
	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);
	// gzip compression
	if (extension_loaded('zlib') and ob_get_length() > 0) {
		ob_end_clean();
		ob_start("ob_gzhandler");
	}
	else {
		ob_start("ob_gzhandler");
	}
	header('Content-Type: text/html; charset=UTF-8');
	$begin = microtime(true);
	function xo_message($message) { if(!defined('xo_error')) define('xo_error', $message);}
	if(phpversion() < 5.4) xo_message('<strong>System error:</strong>: XooMVC needs at least PHP 5.4. Your current installed PHP version is ' . phpversion());
	/** general config */
	$dossier_pages = 'pages/';
	$squelette = 'inc/_layout.php';
	$page = $dossier_pages.'_home.php';
	$idpage='home';
	//$xoomvc_url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$host = $_SERVER['HTTP_HOST'];
	$self = $_SERVER['SCRIPT_NAME'];
	//$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
	$query = $_SERVER['QUERY_STRING'];
	//$xoomvc_url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";
	$xoomvc_url = "http://$host$self?$query" ; // A ADAPTER
	$xoomvc_site = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']); // A ADAPTER
	$xoomvc_dir = realpath('.');
	$websitename = 'JohnDoe Website';
	$website_titre = 'My Website';
	$website_domain = 'John.Doe';
	$website_author ='John DOE';
	$website_email = 'contact@john.doe';
	$website_phone = '(00) 00 000 000';
	$website_description = 'Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros.';
	$website_keywords = 'Suspendisse, ultrices, ornare, tempor, Aenean, eget, ultricies, libero';
	$website_locale = 'fr_FR';
	$website_pageloading = false;
	$password = 'cqfd'; // for protected.php, fileed.php & _xoonews.php
	/** simpleCart config **/
	$simpleCart_checkout = 'PayPal';
	$simpleCart_mail = 'store@john.doe';
	$simpleCart_currency = 'EUR';
	/** Instagram config */
	$instagram_username = 'archimededjerba';
	$instagram_userID = '1560752806';
	// See for token  https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token&scope=public_content
	$instagram_access_token = '1560752806.770d018.977f4299ada54b65ab39f268e0cd947a';
	$instagram_count = 40;
	$instagram_hashtag = '#ohoh, #ahah';
	/** twitter config **/
	$twitter_username = 'DjerbaDiving';
	$twitter_name = 'Archimede Diving Center Djerba';
	$twitter_consumer_key = ''; // also in assets/vendor/twitter_oauth/search.php and user_timeline.php
	$twitter_consumer_secret = ''; // also in assets/vendor/twitter_oauth/search.php and user_timeline.php
	$twitter_oauth_token = ''; // also in assets/vendor/twitter_oauth/search.php and user_timeline.php
	$twitter_oauth_secret = ''; // also in assets/vendor/twitter_oauth/search.php and user_timeline.php
	$twitter_single_hastag = 'livetoscuba';
	$twitter_more_hashtag = '';
	/* twitter.php */
	$twitter_id_conf1 ='345170787868762112';
	$twitter_domId_conf1 ='example1';
	$twitter_maxTweets_conf1 =5;
	$twitter_enableLinks_conf1 =true;
	$twitter_showUser_conf1 ='';
	$twitter_showTime_conf1 ='';
	$twitter_lang_conf1 ='';
	$twitter_dateFunction_conf1 ='';
	$twitter_showRetweet_conf1 ='';
	$twitter_customCallback_conf1 ='';
	$twitter_showInteraction_conf1 ='';
	$twitter_dataOnly_conf1 ='';
	/** facebook config **/
	$facebook_username = 'archimede.divingclub';
	$facebook_page = '305170326191829';
	/** youtube config **/
	$youtube_username = '';
	$youtube_channel = 'UC9qFSmVN5Eek6UVk8yIBdGQ';
	/** tumblr config **/
	$tumblr_hashtag = 'djerbadailyphoto, t-u-n-i-s-i-e, livetoscuba';
	/** google config **/
	$google_tracking = true;
	$google_UAtracking = 'UA-00000000-1';
	$gplus_username = '+krisKrisfr';
	$gplus_id = '108353928765073210817';
	$gmap_object_link = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3314.4706955079755!2d11.053405!3d33.82597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13aa975c6dbd97af%3A0xbc21e002240f273e!2sArchimede%2C+Centre+de+plong%C3%A9e+sous-marine!5e0!3m2!1sfr!2stn!4v1410045200858';
	$gmap_link = 'https://www.google.tn/maps/place/Archimede,+Centre+de+plongée+sous-marine/@33.8259701,11.0512161,17z/data=!3m1!4b1!4m2!3m1!1s0x13aa975c6dbd97af:0xbc21e002240f273e?hl=fr';
	/** about me config **/
	$aboutme_username = 'johndoe';
	/** tripsavisor config **/
	$tripavisor_pagelink = 'Attraction_Review-g297948-d3404854-Reviews-Archimede_Diving_Center_Djerba-Midoun_Djerba_Island_Medenine_Governorate.html';
	/** Disqus config  (see in photos.php) **/
	$disqus_display = true;
	$disqus_shortname = 'mypagemapimagewallretinademo';
	/** Basic File Editor **/
	$fileed_dir = '/www/xoomvc_foundation6';
	$password_enabled = true; //Change to 'true' to enable passwords
	$password = 'cqfd'; //If you enable passwords, change this!
	/** TinyMCE in news.php **/
	$news_editor = true;
	$news_editor_link = '//cdn.tinymce.com/4/tinymce.min.js';
	$news_editor_lang = 'fr_FR';
	$news_editor_plugins = 'image,advlist,code,media,link,paste,table,textcolor,charmap';

	/** cache parameters  **/
/* 	$cache_enable = false;
	$cache_ext  = '.html';
	$cache_time = 3600;
	$cache_folder = 'cache/';
	$ignore_pages = array('', ''); 
	$dynamic_url = $xoomvc_url;
	$cache_file     = $cache_folder.md5($dynamic_url).$cache_ext; 
	$ignore = (in_array($dynamic_url,$ignore_pages))?true:false;
	if (!$ignore && ($cache_enable == true) && file_exists($cache_file) && time() - $cache_time < filemtime($cache_file)) {
		readfile($cache_file);
		echo '<!-- cached page - '.date('l jS \of F Y h:i:s A', filemtime($cache_file)).', Page : '.$dynamic_url.' -->';
		ob_end_flush(); 
		exit();
	}
*/
	/** base pour le site MVC **/
	$page = str_replace(':/', '', $page);
	$page = str_replace('./', '', $page);
	if(isset($_GET['page'])){
		$page = $dossier_pages.$_GET['page'].'.php';
		$idpage = $_GET['page'];
		$website_titre =$_GET['page']. "  - ".$websitename;
	}
	include($squelette);
	/**   cache system **/
/*	if (!is_dir($cache_folder)) {
		mkdir($cache_folder);
	}
	if(!$ignore){
		$fp = fopen($cache_file, 'w');
		fwrite($fp, ob_get_contents());
		fclose($fp);
	}
	ob_end_flush();
*/
?>