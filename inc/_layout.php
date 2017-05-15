<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="HandheldFriendly" content="True">
	<title><?php echo $website_titre; ?></title>
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/fonts/raleway/css/font-raleway.min.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv-respond.js"></script>
	<![endif]-->
	<link rel="icon" href="assets/images/icons/favicon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/icons/apple-touch-icon-144x144.png">
	<link rel="canonical" href="index.php" />
	<link rel="image_src" href="assets/images/icons/apple-touch-icon.png" />
	<link rel="author" href="https://plus.google.com/u/0/<?php echo $gplus_id; ?>">
	<meta name="description" content="<?php echo $website_description; ?>" />
	<meta name="keywords" content="<?php echo $website_keywords; ?>"/>
	<meta property="og:title" content="<?php echo $website_titre; ?>" />
	<meta property="og:url" content="<?php echo $xoomvc_site; ?>" />
	<meta property="og:description" content="<?php echo $website_description; ?>" />
	<meta property="og:site_name" content="<?php echo $website_titre; ?>" />
	<meta property="og:locale" content="<?php echo $website_locale; ?>" />
	<meta property="og:image" content="<?php echo $xoomvc_site; ?>/assets/images/diver1.gif" />
	<meta itemprop="name" content="<?php echo $website_titre; ?>">
	<meta itemprop="description" content="<?php echo $website_description; ?>">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?php echo $website_titre; ?>" />
	<meta name="twitter:description" content="<?php echo $website_description; ?>" />
	<meta name="twitter:image" content="<?php echo $xoomvc_site; ?>/assets/images/diver1.gif" />
	<meta name="twitter:creator" content="@<?php echo $twitter_username; ?>" />
	<meta name="twitter:site" content="@<?php echo $twitter_username; ?>" />
	<!-- Included JS Files (Compressed) -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/foundation.min.js"></script> 
</head>
  <body id="page">
	<?php if ($website_pageloading == true) { ?><div id="pageloading" class="csspinner traditional"></div><?php } ?>
	<div class="container">
		<!-- Header -->
		<header id="toppage">
			<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="large">
				<button class="menu-icon" type="button" data-toggle></button>
				<div class="title-bar-title"><a href="index.php" title="">XooMVC f6</a></div>
			</div>
			<nav class="top-bar" id="example-menu">
				<div class="top-bar-left">
					<ul id="example-menu" class="vertical menu large-horizontal" data-responsive-menu="drilldown medium-accordion large-dropdown">
						<li class="menu-text hide-for-small-only"><a href="index.php" title="">XooMVC f6</a></li>
						<li><a href="#">Pages</a>
							<ul class="vertical menu">
								<li>
									<a href="#"> Item 1 sub example</a>
									<ul class="vertical menu">
										<li><a href="#">Item 1 subA</a></li>
										<li><a href="#"> Item 1 subB</a>
											<ul class="vertical menu">
												<li><a href="#">Item 1 subBA</a></li>
												<li><a href="#">Item 1 subBB</a></li>
											</ul>
										</li>
										<li><a href="#"> Item 1 subC</a>
											<ul class="vertical menu">
												<li><a href="#">Item 1 subCA</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="index.php?page=gallery" title="">Instagram Gallery</a></li>
								<li><a href="index.php?page=photos" title="">Gallery</a></li>
								<li><a href="index.php?page=videos" title="">Vidéos</a></li>
								<li><a href="index.php?page=twitter" title="">Twitter Feed *</a></li>
								<li><a href="index.php?page=protected" title="">Protected</a></li>
								<li><a href="index.php?page=social" title="">Social</a></li>
								<li><a href="index.php?page=news" title="">News</a></li>
								<li><a href="index.php?page=timeline" title="">Timeline</a></li>
								<li><a href="index.php?page=store1" title="">Store 1</a></li>
								<li><a href="index.php?page=team" title="">Team</a></li>
								<li><a href="index.php?page=event" title="">Event</a></li>
								<li><a href="index.php?page=calendar" title="">Calendrier</a></li>
								<li><a href="index.php?page=faq" title="">FaQ</a></li>
								<li><a href="index.php?page=formulaire" title="">Formulaire</a></li>
								<li><a href="index.php?page=contact" title="">Contact</a></li>
								<li><a href="index.php?page=listfiles" title="">Files list</a></li>
							</ul>
						</li>
						<li><a href="#">Pages f5</a>
							<ul class="vertical menu">
								<li><a href="index.php?page=banded" title="">Banded</a></li>
								<li><a href="index.php?page=banner" title="">Banner</a></li>
								<li><a href="index.php?page=blog" title="">Blog</a></li>
								<li><a href="index.php?page=blog0" title="">Blog bis</a></li>
								<li><a href="index.php?page=boxy" title="">Boxy</a></li>
								<li><a href="index.php?page=feed" title="">Feed</a></li>
								<li><a href="index.php?page=grid" title="">Grid</a></li>
								<li><a href="index.php?page=marketing" title="">Marketing</a></li>
								<li><a href="index.php?page=marketing2" title="">Marketing bis</a></li>
								<li><a href="index.php?page=orbit" title="">Orbit</a></li>
								<li><a href="index.php?page=portfolio" title="">Portfolio</a></li>
								<li><a href="index.php?page=product" title="">Product</a></li>
								<li><a href="index.php?page=realty" title="">Realty</a></li>
								<li><a href="index.php?page=sidebar" title="">Sidebar</a></li>
								<li><a href="index.php?page=store" title="">Store</a></li>
								<li><a href="index.php?page=workspace" title="">Workspace</a></li>
							</ul>
						</li>
						<li><a href="#">Pages f6</a>
							<ul class="vertical menu">
								<li><a href="index.php?page=kitchen" title="">Kitchen</a></li>
								<li><a href="index.php?page=agency" title="">Agency</a></li>
								<li><a href="index.php?page=blog1" title="">Blog 1</a></li>
								<li><a href="index.php?page=blog2" title="">Blog 2</a></li>
								<li><a href="index.php?page=ecommerce" title="">E-Commerce</a></li>
								<li><a href="index.php?page=magazine" title="">Magazine</a></li>
								<li><a href="index.php?page=portfolio1" title="">Portfolio 1</a></li>
								<li><a href="index.php?page=product-page" title="">Product Page</a></li>
								<li><a href="index.php?page=real-estate" title="">Real Estate</a></li>
							</ul>
						</li>
						<li><a href="index.php?page=motion-ui">Motion UI</a></li>
						<li><a href="index.php?page=fileed">Editor</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- error -->
		<?php if(defined('xo_error')) { ?>
			<div class="row">
				<div class="large-12 columns">
					<div data-alert class="alert-box alert text-center">
						<?php echo constant('xo_error'); ?>
						<!--a href="#" class="close">&times;</a-->
					</div>    
				</div>
			</div>
		<?php } ?>
		<!-- Content -->
		<main id="<?php echo $idpage; ?>">
			<?php include($page); ?>
		</main>
		<!-- Footer -->
		<footer class="row">
			<div class="large-12 columns">
				<hr>
				<div class="row">
					<div class="large-8 columns">
						<p><i class="fa fa-html5 fa-1x"></i> & <i class="fa fa-css3 fa-1x"></i> Adaptive <a href="http://foundation.zurb.com/sites/download.html/" rel="external" title="">Foundation</a> MVC by <a href="http://xoofoo.org" rel="external" title="">XooFoo  <i class="fa fa-github fa-1x"></i></a></p>
					</div>
					<div class="large-4 columns">
						<ul class="menu align-right">
							<li><a href="#" title="">Link 1</a></li>
							<li><a href="#" title="">Link 2</a></li>
							<li><a href="#" title="">Link 3</a></li>
							<li><a href="#" title="">Link 4</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<p class="social_footer">
							<a rel="external" class="lsf-icon" href="https://twitter.com/<?php echo $twitter_username; ?>" title="Twitter <?php echo $websitename; ?>"><i class="fa fa-twitter-square fa-lg"></i> Twitter</a> 
							<a rel="external" class="lsf-icon" href="https://www.facebook.com/<?php echo $facebook_username; ?>" title="Facebook <?php echo $websitename; ?>"><i class="fa fa-facebook-square fa-lg"></i> Facebook</a>
							<a rel="external" class="lsf-icon" href="https://plus.google.com/u/0/<?php echo $gplus_id; ?>" title="Google + <?php echo $websitename; ?>"><i class="fa fa-google-plus-square fa-lg"></i> Google</a>
							<a rel="external" class="lsf-icon" href="http://instagram.com/<?php echo $instagram_username; ?>" title="Instagram <?php echo $websitename; ?>"><i class="fa fa-instagram fa-lg"></i> Instagram</a>
							<a rel="external" class="lsf-icon" href="https://www.youtube.com/channel/<?php echo $youtube_channel; ?>" title="YouTube Vidéos Archimede Diving Center Djerba"><i class="fa fa-youtube fa-lg"></i> YouTube</a>
							<a rel="external" class="lsf-icon" href="http://about.me/<?php echo $aboutme_username; ?>" title="About Me <?php echo $websitename; ?>"><i class="fa fa-meh-o fa-lg"></i> About.me</a>
							<a rel="external" class="lsf-icon" href="http://www.tripadvisor.fr/<?php echo $tripavisor_pagelink; ?>" title="Recommandations Tripadvisor <?php echo $websitename; ?>"><i class="fa fa-tripadvisor fa-lg"></i> Tripadvisor</a>
						</p>
						<p class="social_footer"><a class="lsf-icon" href="index.php?page=mentions" title=""><i class="fa fa-gavel"></i>   Mentions légales</a><a class="lsf-icon" href="index.php?page=conditions-generales-vente" title=""><i class="fa fa-balance-scale"></i>   CGV</a></p>
						<!--?php $end = microtime(true); echo '<p class="social_footer"><small>Affiché en '.round(($end - $begin),6).' seconde(s)</small></p>'; ?-->
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Initialize JS Plugins -->
	<script src="assets/js/app.js"></script>
	<script src="assets/vendor/jquery/jquery.scrollUp.min.js"></script>
	<!-- Include Stats -->
	<?php if ($google_tracking == true) { include_once("inc/_analyticstracking.php");} ?>
</body>
</html>