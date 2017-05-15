<style>
#specificperson .column {margin-bottom:1em;}
</style>
<section class="margtop">
	<div class="row">
		<div class="large-8 columns">
			<div class="callout primary">
				<h3>Get in Touch!</h3>
				<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
			</div>
			<h5 class="title">Contact Our Company</h5>
			<form>
				<div class="row collapse">
					<div class="large-2 columns">
						<label class="inline middle">Your Name</label>
					</div>
					<div class="large-10 columns">
						<input type="text" id="yourName" placeholder="John Smith">
					</div>
				</div>
				<div class="row collapse">
					<div class="large-2 columns">
						<label class="inline middle"> Your Email</label>
					</div>
					<div class="large-10 columns">
						<input type="text" id="yourEmail" placeholder="me@smith.co">
					</div>
				</div>
				<label>What's up?</label>
				<textarea rows="4"></textarea>
				<button type="submit" class="radius button">Submit</button>
			</form>
		</div>
		<div class="large-4 columns">
			<h5>Map</h5>
			<p>
				<object type="text/html" data="<?php echo $gmap_object_link; ?>" style="min-height:300px;"></object><br/>
				<a rel="external" href="<?php echo $gmap_link; ?>" data-reveal-id="mapModal" title="">View Map</a>
			</p>
			<p>123 Awesome St.<br/>Barsoom, MA 95155</p>
		</div>
	</div>
	<div id="specificperson" class="row small-up-2 medium-up-3 large-up-6">
		<h5 class="title">Specific Person</h5>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Mal Reynolds</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Zoe Washburne</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Jayne Cobb</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Simon Tam</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">River Tam</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Hoban Washburne</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Shepherd Book</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Kaywinnet Lee Fry</a>
		</div>
		<div class="column text-center">
			<a href="#" title=""><img class="thumbnail" alt="" src="assets/images/200x200.gif">Inarra Serra</a>
		</div>
	</div>
</section>