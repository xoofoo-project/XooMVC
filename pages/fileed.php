<style>#fileed textarea { font-family: monospace, monospace;font-size: .9em; color:#e6e6e6;background-color:#333;}</style>
<section class="row margtop">
	<div class="large-12 columns text-center">
		<h2 class="text-center">Basic File Editor</h2>
<?php
//By default this script will allow you to edit all the files in $fileed_dir that
//have extensions in the valid_ext array and are writable.  It also allows you
//to edit all the files that are writable and have valid extensions in the sub
//folders of $fileed_dir.  In other words, it recursively searches for files you
//can edit in $fileed_dir.  If you wish to change this behavior, so that it only
//stays in $fileed_dir and doesn't drill down to any of its subdirs,--search for
//$fileed_list = directoryToArray($fileed_dir, true); and change true to false.
//$fileed_dir = "/www/xoomvc_foundation6";
//Valid Extension array.  
$valid_ext[0] = "TXT";
$valid_ext[1] = "txt";
$valid_ext[2] = "htm";
$valid_ext[3] = "HTM";
$valid_ext[4] = "html";
$valid_ext[5] = "HTML";
$valid_ext[6] = "md";
$valid_ext[7] = "MD";
$valid_ext[8] = "sh";
$valid_ext[9] = "SH";
$valid_ext[10] = "pl";
$valid_ext[11] = "PL";
$valid_ext[12] = "cgi";
$valid_ext[13] = "CGI";
$valid_ext[14] = "CSS";
$valid_ext[15] = "css";
$valid_ext[16] = "conf";
$valid_ext[17] = "CONF";
$valid_ext[18] = "ASP";
$valid_ext[19] = "asp";
$valid_ext[20] = "JSP";
$valid_ext[21] = "jsp";
$valid_ext[22] = "js";
$valid_ext[23] = "JS";
$valid_ext[24] = "php";
$valid_ext[25] = "PHP";
$valid_ext[26] = "json";
$valid_ext[27] = "JSON";
$valid_ext[28] = "scss";
$valid_ext[29] = "SCSS";
$valid_ext[30] = "ini";
$valid_ext[31] = "INI";
$valid_ext[32] = "cfm";
$valid_ext[33] = "CFM";
$valid_ext[34] = "inc";
$valid_ext[35] = "INC";
$valid_ext[36] = "py";
$valid_ext[37] = "PY";
$valid_ext[38] = "tpl";
$valid_ext[39] = "TPL";
$valid_ext[39] = "list";

if($password_enabled == true){
session_start();
if($_POST['password']!= $password && $_SESSION['password'] != $password){
print '<div class="row">
	<div  class="small-5 small-centered columns">
		<form action="index.php?page=fileed" method="post">
			<input class="text-center" name="password" type="password" placeholder="••••••••••••">
			<input class="button secondary medium" type="submit" name="login" value="Log In">
		</form>
	</div>
</div>';
return;
}elseif($_POST['password'] == $password && $_SESSION['password'] != $password){
$_SESSION['password'] = $password; 
}
}
if(!$_POST['open'] && !$_POST['save']){
if (is_readable($fileed_dir)) {
?>
<form action="index.php?page=fileed" method="post">
<div class="row column">
<?php
chdir($fileed_dir);
echo "<p class='text-center callout primary'> We are in:  ";
echo getcwd();
echo "</p>";
?>
<p> Please choose a file to open:</p>
<select name="the_file">
<?php
function directoryToArray($directory, $recursive) {
	$me = basename($_SERVER['PHP_SELF']);
	$array_items = array();
		if ($handle = opendir($directory)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != ".." && $file != $me && substr($file,0,1) != '.') {
					if (is_dir($directory. "/" . $file)) {
						if($recursive) {
							$array_items = array_merge($array_items, directoryToArray($directory. "/" . $file, $recursive));
						}
					} else {
						$file = $directory . "/" . $file;
						$array_items[] = preg_replace("/\/\//si", "/", $file);
					}
				}
			}
			closedir($handle);
			asort($array_items);
		}
		return $array_items;
	}
	$fileed_list = directoryToArray($fileed_dir, true);
	foreach ($fileed_list as $file)
		{
			$ext = substr(strrchr($file, '.'), 1);
			if (in_array($ext,$valid_ext) && is_writable($file)) {
			echo "<option value=\"$file\">$file</option>";
		}
	}
?>
</select>
<input class="button medium" type="submit" name="open" value="Open" />
</div>
</form>
<?php
}
else
	{
	echo "<div class='callout warning text-center'><h5>Could not open directory!! </h5><h6>Permissions Problem??</h6></div>";
	}
}
else if (isset($_POST['open'])){
	if (is_writable($_POST["the_file"])) {  
?>
<form action="index.php?page=fileed" method="post">
	<input type="hidden" name="the_file2" value="<?php echo $_POST["the_file"]; ?>" />
	<div class="row column">
		<div class="text-center callout primary">
			<h5>File Opened!</h5>
			<p class="text-center">We are working on: <?php echo $_POST["the_file"]; ?></p>
			<p class="text-center"><small>Click <a  href="">here</a> to go back to the homepage editor.</small></p>
		</div>
	</div>
	<div class="row column">
		<textarea rows="30" cols="80" name="updatedfile">
<?php
	$file2open = fopen($_POST["the_file"], "r");
	$current_data = @fread($file2open, filesize($_POST["the_file"]));
	$current_data = preg_replace( "!<textarea([^>]+)>(.*?)</textarea>!is", "[textarea\\1]\\2[/textarea]", $current_data );
	$current_data = preg_replace( "/&([a-z\d]{2,7}|#\d{2,5});/i", "&amp;$1;", $current_data );
	echo $current_data;
	fclose($file2open);
?>
		</textarea>
		<div class="text-center"><input class="button medium" type="submit" name="save" value="Save Changes" />   <a href="" class="button medium alert" title="Annuler">Annuler</a></div>
	</div>
</form>
<?php
}
else
	{
	echo "<div class='callout warning text-center'><h5>Could not open file!! </h5><h6>Permissions Problem??</h6></div>";
	}
}
else if (isset($_POST['save'])){
	if (is_writable($_POST["the_file2"])) {
		$file2ed = fopen($_POST["the_file2"], "w+");
		$data_to_save = $_POST["updatedfile"];
		$data_to_save = preg_replace( "!\[textarea([^\]]+)\](.*?)\[/textarea\]!is", "<textarea\\1>\\2</textarea>", $data_to_save );
		$data_to_save = stripslashes($data_to_save);
		if (fwrite($file2ed,$data_to_save)) {
			echo "<div class='callout success text-center'><h5>File saved</h5><p class='text-center'> Click <a href=''>here</a> to go back to the editor.</p></div>";
			fclose($file2ed);
		}
		else {
			echo "<div class='callout warning text-center'><h5>File NOT saved!!<h5><h6>Permissions Problem??</h6><p class='text-center'>Click <a href=''>here</a> to go back to the editor.</p></div>";
			fclose($file2ed);
		}
	}
	else  {
		echo "<div class='callout warning'><h5>File NOT saved!!<h5><h6>Permissions Problem??</h6></div>";
	}
}
?>
</div>
</section>