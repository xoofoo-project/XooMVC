<?php
$name = $_REQUEST["name"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
$from = $_REQUEST["from"];
$verif_box = $_REQUEST["verif_box"];
$name = stripslashes($name); 
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$from = stripslashes($from); 
$ip=$_SERVER['REMOTE_ADDR'];

if(md5($verif_box).'a4xn' == $_COOKIE['xoomvc']){
	$message = "Nom: ".$name."\n".$message;
	$message = "De: ".$from."\n".$message;
	mail("contact@john.doe", 'Message : '.$subject, "Adresse IP : http://whatismyipaddress.com/ip/".$ip." \n\n".$message, "From: $from");
	header("Location: http://127.0.0.1/index.php?page=merci");
	setcookie('xoomvc','');
} else {
	header("Location:".$_SERVER['HTTP_REFERER']."?subject=$subject&from=$from&message=$message&wrong_code=true");
	header("Location: http://127.0.0.1/index.php?page=contact");
}
?>