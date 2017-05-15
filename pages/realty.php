<section class="margtop">
	<div class="row">
		<div class="large-12 columns">
			<img alt="" src="assets/images/1600x600.gif"><br><br>
		</div>
	</div>
	<div class="row">
		<div class="large-4 secondary callout columns">
			<img alt="" src="assets/images/500x500.gif">
			<br><br>
			<h4>Header</h4>
			<p>Fusce ullamcorper mauris in eros dignissim molestie posuere felis blandit. Aliquam erat volutpat. Mauris ultricies posuere vehicula. Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p><hr>
			<div class="row">
				<div class="large-4 columns">
					<a href="#" class="small button" title="">Link</a>
				</div>
				<div class="large-4 columns">
					<a href="#" class="small button" title="">Link</a>
				</div>
				<div class="large-4 columns">
					<a href="#" class="small button" title="">Link</a>
				</div>
			</div>
		</div>
		<div class="large-8 columns">
			<div class="secondary callout">
				<div class="row">
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="o_o" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="-_-" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="(-.-)" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="^|^" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="(^.^)" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="(^.°)" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
					<div class="large-3 columns end">
						<a href="assets/images/600x500.gif" title="" class="image-link"><img class="thumbnail" alt="" src="assets/images/600x500.gif"></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="secondary callout">
						<h5>Subheader</h5>
						<p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
						<a href="#" class="small button" title="">Link</a>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="secondary callout">
						<h5>Subheader</h5>
						<p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
						<a href="#" class="small button" title="">Link</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script>
$('.image-link').magnificPopup({ 
  type: 'image',
  mainClass: 'mfp-with-zoom',
  gallery: {enabled: true},
  image: {titleSrc: 'title'},
  zoom: {
    enabled: true,
    duration: 300,
    easing: 'ease-in-out',
    opener: function(openerElement) {
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
});
</script>