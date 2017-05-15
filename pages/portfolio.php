<section class="margtop">
	<div class="row">
		<div class="large-12 columns">
			<img alt="" src="assets/images/1000x500.gif">
		</div>
	</div>
	<div class="row">
		<hr>
		<div class="large-8 columns">
			<h4>About</h4>
			<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
			<i class="fi-social-twitter"></i>
		</div>
		<div class="large-4 columns">
			<img alt="" src="assets/images/400x300.gif">
		</div>
	</div>
	<div class="row">
		<hr>
		<div class="large-12 columns">
			<h4>Work</h4>
			<p>Click on each image!</p>
			<div class="row medium-up-3 large-up-4">
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
				<div class="column">
					<a class="gallery" href="assets/images/800x500.gif" title=""><img class="thumbnail" alt="" data-caption="caption 1 here..." src="assets/images/800x500.gif"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<hr>
			<h4><a href="#" class="button large">Contact me</a></h4>
			<div class="large-4 columns">
				Email: <?php echo $website_email; ?>
				</div>
			<div class="large-4 columns">Twitter: @<?php echo $twitter_username; ?></div>
			<div class="large-4 columns">Phone: <?php echo $website_phone; ?></div>
		</div>
	</div>
</section>
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>
$('.gallery').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
</script>