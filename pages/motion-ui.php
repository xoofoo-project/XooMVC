<script src="assets/js/motion-ui.min.js"></script>
<script src="assets/js/modernizr.js"></script>
<!--link rel="stylesheet" href="assets/css/motion-ui.min.css" /-->
<style>#yeti {display: block;max-width: 400px;margin: 0 auto;}</style>
<section class="margtop">
	<div class="row">
		<div class="small-12 columns">
			<h1>Motion UI</h1>
			<p class="lead">Thanks for trying out Motion UI! Here are all of the pre-set transitions to get you started.</p>
			<hr>
			<div class="row">
				<div class="medium-8 medium-push-4 columns">
					<img id="yeti" src="assets/images/yeti.svg">
				</div>
				<div class="medium-4 medium-pull-8 columns">
					<select id="transitionList">
						<option value="slide-in-up">slide-in-up</option>
						<option value="slide-in-right">slide-in-right</option>
						<option value="slide-in-down">slide-in-down</option>
						<option value="slide-in-left">slide-in-left</option>
						<option value="fade-in">fade-in</option>
						<option value="spin-in">spin-in</option>
						<option value="spin-in-ccw">spin-in-ccw</option>
						<option value="scale-in-up">scale-in-up</option>
						<option value="scale-in-down">scale-in-down</option>
						<option value="hinge-in-from-top">hinge-in-from-top</option>
						<option value="hinge-in-from-right">hinge-in-from-right</option>
						<option value="hinge-in-from-bottom">hinge-in-from-bottom</option>
						<option value="hinge-in-from-left">hinge-in-from-left</option>
						<option value="hinge-in-from-middle-x">hinge-in-from-middle-x</option>
						<option value="hinge-in-from-middle-y">hinge-in-from-middle-y</option>
					</select>
					<div class="text-center">
						<button class="button" id="transitioner">Transition!</button>
					</div>
					<hr>
					<section>
						<h4>Learn More</h4>
						<p>Motion UI includes many pre-made transitions, but the real power of the library is in the Sass. Check out the <a rrel="external" href="https://github.com/zurb/motion-ui/tree/master/docs" title="">documentation</a> to learn more.</p>
					</section>
					<hr>
					<section>
						<h4>Contribute</h4>
						<p>Interested in helping us write new effects? Head on over to <a rel="external" href="https://github.com/zurb/motion-ui" title="">GitHub</a>, pull down the repository, and get coding!</p>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
$(function() {
  var $yeti = $('#yeti');
  var $transitionList = $('#transitionList');

  $('#transitioner').click(function() {
    MotionUI.animateIn($yeti, $transitionList.val());
  });
});
</script>