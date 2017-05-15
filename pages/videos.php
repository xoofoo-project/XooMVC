<?php
	global $set; if(empty($set)) $set = array();
	$videos = file("./assets/json/videos.list");
?>
<style>
#gallery .column {margin-bottom:1.5em !important;}
.figcaption {font-size:.9em;}
</style>
<section class="margtop">
	<div class="row column">
		<header><h1 class="text-center">Quelques vidéos ...</h1></header>
	</div>
	<div id="gallery" class="row small-up-1 medium-up-2 large-up-4">
		<?php
			for ($i=0;$i<count($videos);$i++)
			{ $key = explode(";",$videos[$i]);
				echo('<div class="column text-center"><a  class="popup-youtube" href="http://www.youtube.com/watch?v='.$key[0].'" title="'.$key[1].'"><img class="thumbnail" src="http://img.youtube.com/vi/'.$key[0].'/0.jpg" alt="Video" /><span class="figcaption">'.$key[1].'</span></a></div>');
			}
		?>
	</div>
</section>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
<script>
	$(document).ready(function() {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});
</script>