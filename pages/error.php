<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/css/foundation.min.css">
<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/fonts/raleway/css/font-raleway.min.css">
<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/css/main.css">
<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/css/app.css">
<style>
#menu-header, .social_footer {display:none;}
</style>
<section class="row">
	<div class="large-12 columns text-center">
		<?php
			$status=$_SERVER['REDIRECT_STATUS'];
			$codes=array(
				  400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
				  401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.'),
				  403 => array('403 Forbidden', 'Sorry, employees and staff only.'),
				  404 => array('Oups !<br>404 Missing', 'We\'re sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.'),
				  405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
				  408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
				  414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
				  500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
				  502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
				  504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
			);
			$errortitle=$codes[$status][0];
			$message=$codes[$status][1];
			if($errortitle==false){
				   $errortitle="Erreur inconnu";
				   $message="Un erreur non identifiée vient de se produire.";
			}
		?>
		<h1 id="site" style="margin-top: 100px"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/index.php">Nom du site</a></h1>
		<?php
			echo('<h2 id="thx">'.$errortitle.'</h2>');
			echo('<p class="text-center">'.$message.'</p>');
		?>	
	</div>
</section>