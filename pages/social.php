<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="assets/vendor/social/css/dpSocialTimeline.css" />
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendor/social/js/jquery.isotope.min.js"></script>
<script src="assets/vendor/social/js/jquery.dpSocialTimeline.min.js"></script>
<script>
	$(document).ready(function(){
		$('#socialTimeline').dpSocialTimeline({
			feeds: 
			{
				'twitter': {data: 'assets/vendor/social/twitter_oauth/user_timeline.php?screen_name=<?php echo $twitter_username; ?>'},
				'twitter_hash': {data: 'assets/vendor/social/twitter_oauth/search.php?q=%23<?php echo $twitter_single_hastag; ?>', limit: 16},
				'facebook_page': {data: '<?php echo $facebook_page; ?>'},
				'youtube': {data: '<?php echo $youtube_channel; ?>'},
				'instagram': {data: 'assets/vendor/social/instagram_auth/instagram.php?username=<?php echo $instagram_username; ?>'},
				//'instagram_hash': {data: '<?php echo $instagram_hashtag; ?>'},
				'tumblr': {data: '<?php echo $tumblr_hashtag; ?>'}
			},
			layoutMode: 'columns',
			showLayout: false,
			itemWidth: 225,
			total: 100,
			addLightbox: true,
			cache: true,
			cacheTime: 3600
		});
	});
</script>
<section class="row margtop">
	<div class="large-12 columns">
		<header><h1>Social Networks Timeline</h1></header>
		<div id="socialTimeline" style="width:100%;"></div>
	</div>
</section>