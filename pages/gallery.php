<style>
	#instafeed .likes { background:rgba(222,89,135,0.8); font-family:sans-serif; font-size:1em; position:absolute; color:#fff; right:5px; top:5px; left:5px; opacity:0; text-align:center; line-height:145px; text-shadow:0 1px rgba(0,0,0,0.5);-webkit-font-smoothing:antialiased;transition: opacity 100ms ease;}
	#instafeed a:hover .likes {  opacity:1;}
</style>
<script src="assets/vendor/instafeed/instafeed.min.js"></script>
<script>
	var userFeed = new Instafeed({
		get: 'user',
		userId: '<?php echo $instagram_userID; ?>',
		accessToken: '<?php echo $instagram_access_token; ?>',
		limit: <?php echo $instagram_count; ?>,
		//sortBy: 'most-liked',
		after: function () {
		var images = $("#instafeed").find('a');
		$.each(images, function(index, image) {
			var delay = (index * 75) + 'ms';
			//$(image).css('animation-delay', delay);
			//$(image).addClass('animated flipInX');
		});
		},
		template: '<div class="column"><a href="{{link}}" rel="external" title="{{caption}}"><img class="thumbnail" src="{{image}}" alt="" /><!--div class="likes">&hearts; {{likes}}</div--></a></div>'
	});
	userFeed.run();
</script>
<section class="row margtop">
	<div class="large-12 columns">
		<h3><?php echo $websitename; ?> Gallery</h3>
		<div id="instafeed" class="row small-up-2 medium-up-3 large-up-5"></div>
		<div class="text-right">
			<a rel="external" class="medium secondary button" href="http://instagram.com/<?php echo $instagram_username; ?>" title="Afficher la galerie complète des photos">Voir la galerie complète</a>
		</div>
	</div>
</section>