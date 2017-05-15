<section class="margtop">
	<div class="row">
		<div class="large-12 columns">
			<div class="callout">
				<h1>Feed Template</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-3 columns ">
			<div class="callout">
				<a href="#"><div id="qrcode"></div><!--img alt="" src="assets/images/300x240.gif"/--></a>
				<h5 class="text-center"><a href="#" title="">Your Name</a></h5>
				<div>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 1</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 2</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 3</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 4</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 5</a></h5>
					</section>
					<section class="section">
						<h5 class="title"><a href="#" title="">Section 6</a></h5>
					</section>
				</div>
			</div>
		</div>
		<div class="large-6 columns">
			<div class="row">
				<div class="large-2 columns small-3">
					<img alt="" src="assets/images/80x80.gif"/>
				</div>
				<div class="large-10 columns">
					<p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
					<ul class="menu">
						<li><a href="" title="">Reply</a></li>
						<li><a href="" title="">Share</a></li>
					</ul>
					<h6>2 Comments</h6>
					<div class="row">
						<div class="large-2 columns small-3">
							<img alt="" src="assets/images/50x50.gif"/>
						</div>
						<div class="large-10 columns">
							<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p>
						</div>
					</div>
					<div class="row">
						<div class="large-2 columns small-3">
							<img alt="" src="assets/images/50x50.gif"/>
						</div>
						<div class="large-10 columns">
							<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p>
						</div>
					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="large-2 columns small-3">
					<img alt="" src="assets/images/80x80.gif"/>
				</div>
				<div class="large-10 columns">
					<p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
					<ul class="menu">
						<li><a href="" title="">Reply</a></li>
						<li><a href="" title="">Share</a></li>
					</ul>
				</div>
				</div>
				<hr/>
				<div class="row">
				<div class="large-2 columns small-3">
					<img alt="" src="assets/images/80x80.gif"/>
				</div>
				<div class="large-10 columns">
					<p><strong>Some Person said:</strong> Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong.</p>
					<ul class="menu">
						<li><a href="" title="">Reply</a></li>
						<li><a href="" title="">Share</a></li>
					</ul>
					<h6>2 Comments</h6>
					<div class="row">
						<div class="large-2 columns small-3">
							<img alt="" src="assets/images/50x50.gif"/>
						</div>
						<div class="large-10 columns">
							<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<aside class="large-3 columns hide-for-small-only text-center">
			<p><a href="#" title="" rel="external"><img alt="" src="assets/images/300x440.gif"/></a></p>
			<p><a href="#" title="" rel="external"><img alt="" src="assets/images/300x440.gif"/></a></p>
		</aside>
	</div>
</section>

<script src="assets/vendor/qrcode/qrcode.min.js"></script>
<script>
var qrcode = new QRCode(document.getElementById("qrcode"), {
	text: window.location.href,
	width: 240,
	height: 240,
	colorDark : "#000",
	colorLight : "#fff",
	correctLevel : QRCode.CorrectLevel.H
});
</script>