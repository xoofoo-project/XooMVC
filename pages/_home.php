<section class="margtop">
	<div class="row">
		<div class="large-12 columns">
			<h1>Welcome to Foundation for Sites 6</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="callout large secondary">
				<h3>We&rsquo;re stoked you want to try Foundation! </h3>
				<p>To get going, this file includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
				<p>Once you've exhausted the fun in this document, you should check out:</p>
				<div class="row">
					<div class="large-4 medium-4 columns">
						<p><a rel="external" href="http://foundation.zurb.com/sites/docs/" title="">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
					</div>
					<div class="large-4 medium-4 columns">
						<p><a rel="external" href="http://zurb.com/university/code-skills" title="">Foundation Code Skills</a><br />These online courses offer you a chance to better understand how Foundation works and how you can master it to create awesome projects.</p>
					</div>
					<div class="large-4 medium-4 columns">
						<p><a rel="external" href="http://foundation.zurb.com/forum" title="">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowlege.</p>
					</div>
				</div>
				<div class="row">
					<div class="large-4 medium-4 medium-push-2 columns">
						<p><a rel="external" href="http://github.com/zurb/foundation" title="">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
					</div>
					<div class="large-4 medium-4 medium-pull-2 columns">
						<p><a rel="external" href="https://twitter.com/ZURBfoundation" title="">@zurbfoundation</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it (and send you a totally boss sticker).</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 columns">
			<h5>Here&rsquo;s your basic grid:</h5>
			<div class="row">
				<div class="large-12 columns">
					<div class="callout primary">
						<p><strong>"large-12 columns" section in a row.</strong> Each of these includes a div.callout element so you can see where the columns are - it's not required at all for the grid.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 medium-6 columns">
					<div class="callout primary">
						<p>large-6 medium-6 columns</p>
					</div>
				</div>
				<div class="large-6 medium-6 columns">
					<div class="callout primary">
						<p>large-6 medium-6 columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 medium-4 small-4 columns">
					<div class="callout primary">
						<p>large-4 medium-4 small-4 columns</p>
					</div>
				</div>
				<div class="large-4 medium-4 small-4 columns">
					<div class="callout primary">
						<p>large-4 medium-4 small-4 columns</p>
					</div>
				</div>
				<div class="large-4 medium-4 small-4 columns">
					<div class="callout primary">
						<p>large-4 medium-4 small-4 columns</p>
					</div>
				</div>
			</div>
			<hr />
			<h5>And a little modal!</h5>
			<p><a data-toggle="exampleModal11">Click me for a modal</a></p>
			<div class="reveal" id="exampleModal11" data-reveal>
				<h1>Awesome!</h1>
				<p class="lead">I have another modal inside of me!</p>
				<a class="button" data-toggle="exampleModal111">Click me for another modal!</a>
				<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="reveal" id="exampleModal111" data-reveal>
				<h2>ANOTHER MODAL!!!</h2>
				<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>		
			<hr />
			<h5>We bet you&rsquo;ll need a form somewhere:</h5>
			<form>
				<div class="row">
					<div class="large-12 columns">
						<label>Input Label</label>
						<input type="text" placeholder="large-12.columns" />
					</div>
				</div>
				<div class="row">
					<div class="large-4 medium-4 columns">
						<label>Input Label</label>
						<input type="text" placeholder="large-4.columns" />
					</div>
					<div class="large-4 medium-4 columns">
						<label>Input Label</label>
						<input type="text" placeholder="large-4.columns" />
					</div>
					<div class="large-4 medium-4 columns">
						<label>Input Label</label>
						<div class="input-group">
							<input type="text" placeholder="small-9.columns" class="input-group-field" />
							<span class="input-group-label">.com</span>
						</div>
					</div>
				</div>
				<div class="row">
					<h6>Label Positioning</h6>
					<div class="small-3 columns">
						<label for="middle-label" class="text-right middle">Label</label>
					</div>
					<div class="small-9 columns">
						<input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
					</div>
				</div>
				
				<div class="row">
					<div class="large-12 columns">
						<h6>Inline Labels and Buttons</h6>
						<div class="input-group">
							<span class="input-group-label">$</span>
							<input class="input-group-field" type="number">
							<div class="input-group-button">
								<input type="submit" class="button" value="Submit">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Select Box</label>
						<select>
							<option value="husker">Husker</option>
							<option value="starbuck">Starbuck</option>
							<option value="hotdog">Hot Dog</option>
							<option value="apollo">Apollo</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="large-6 medium-6 columns">
						<label>Choose Your Favorite</label>
						<input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
						<input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
					</div>
					<div class="large-6 medium-6 columns">
						<label>Check these out</label>
						<input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
						<input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Textarea Label</label>
						<textarea placeholder="small-12.columns"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="large-4 medium-4 columns">
			<h5>Try one of these buttons:</h5>
			<p>
				<a href="#" class="small button">Simple Button</a><br/>
				<a href="#" class="medium success button">Success Button</a><br/>
				<a href="#" class="medium alert button">Alert Button</a><br/>
				<a href="#" class="medium secondary button">Secondary Button</a><br/>
				<a class="tiny button" href="#">So Tiny</a><br/>
				<a class="small button" href="#">So Small</a><br/>
				<a class="large button" href="#">So Large</a><br/>
				<a class="expanded button" href="#">Such Expand</a><br/>
				<span class="button-group">
					<a class="button">One</a>
					<a class="button">Two</a>
					<a class="button">Three</a>
				</span><br/>
				<button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
				<div class="dropdown-pane" id="example-dropdown" data-dropdown>Just some junk that needs to be said. Or not. Your choice.</div>
				<div class="callout">
					<button class="close-button" aria-label="Close alert" type="button">
						<span aria-hidden="true">&times;</span>
					</button>
					<p>This is a static close button example.</p>
				</div>
			</p>
			<div class="callout">
				<h5>So many components, girl!</h5>
				<p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
				<a rel="external" href="http://foundation.zurb.com/docs/" class="small button" title="">Go to Foundation Docs</a>
			</div>
		</div>
	</div>
</section>