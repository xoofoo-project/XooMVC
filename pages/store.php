<script src="assets/vendor/simplecartjs/simpleCart.min.js"></script>
<!--script src="assets/vendor/simplecartjs/simpleCart_config.js"></script-->
<script>
	simpleCart({
		cartColumns: [
			{ attr: "name" , label: "Prestation" },
			{ attr: "price" , label: "Prix", view: 'currency' },
			{ view: "decrement" , text:"<i class='fa fa-minus'></i>", label: false },
			{ attr: "quantity" , label: "Qté" },
			{ view: "increment" , text:"<i class='fa fa-plus'></i>", label: false },
			{ attr: "total" , label: "Sous-Total", view: 'currency' },
			{ view: "remove" , text: "<i class='fa fa-trash-o'></i>" , label: false }
		],
		cartStyle: "table", 
		checkout: { 
			type: "<?php echo $simpleCart_checkout ; ?>" , 
			email: "<?php echo $simpleCart_mail ; ?>" 
		},
		currency: 	"<?php echo $simpleCart_currency ; ?>"
	});
</script>
<style>
#store .tabs, #store .tabs-content {border:none; background:inherit;}
.tabs > li > a{ font-size:1.1em;}
.tabs > li > a:hover { background: #e6e6e6; }
#storemanaged {margin-top:3.5em;}
.button-group {position: relative;display: inline-block;margin: .5em 0; }
.button-group:before {content: attr(data-grouptype);z-index: 99999;color: #999;display: block;font-size: 1em;padding: 0.5em;border-radius: 50%;background: #fff;position: absolute;left: 42.5%;top: 0.35em; }
.button-group button + button {margin-left: 5px; }
.simpleCart_items table {width:100%;}
.simpleCart_grandTotal {font-weight:bold;}
</style>
<section class="row margtop">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-4 small-12 columns">
					<img alt="" src="assets/images/500x500.gif">
					<div class="hide-for-small-only callout secondary">
						<h3>Header</h3>
						<h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</h5>
					</div>
					<div class="success callout"><h6><i class="fa fa-shopping-cart"></i> : <span class="simpleCart_total"></span> (<span class="simpleCart_quantity"></span> items)  <a href="javascript:;" class="simpleCart_empty"><i class="fa fa-trash-o"></i></a></h6></div>
				</div>
				<div class="large-8 columns">
					<div class="row">
						<ul class="tabs" data-tabs id="store-tabs">
							<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></h5></li>
							<li class="tabs-title"><a href="#panel2">Tab 2</a></li>
							<li class="tabs-title"><a href="#panel3">Tab 3</a></li>
						</ul>
						<div class="tabs-content" data-tabs-content="store-tabs">
							<div class="tabs-panel is-active" id="panel1">
								<div class="large-6 small-8 columns">
									<img class="thumbnail" alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name1</h5>
										<h6 class="subheader item_price">€100.00</h6>
										<div class="button-group" data-grouptype="OR">
											<button href="#" class="item_add small button primary">Buy it now</button>
											<button href="#" class="small button success">Learn More</button>
										</div>
									</div>
								</div>
								<div class="large-6 small-8 columns">
									<img class="thumbnail" alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name2</h5>
										<h6 class="subheader item_price">€200.00</h6>
										<div class="button-group" data-grouptype="OR">
											<button href="#" class="item_add small button primary">Buy it now</button>
											<button href="#" class="small button success">Learn More</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tabs-panel" id="panel2">
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name4</h5>
										<h6 class="subheader item_price">€400.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name5</h5>
										<h6 class="subheader item_price">€500.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name6</h5>
										<h6 class="subheader item_price">€600.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
							</div>
							<div class="tabs-panel" id="panel3">
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name7</h5>
										<h6 class="subheader item_price">€100.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name8</h5>
										<h6 class="subheader item_price">€200.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name9</h5>
										<h6 class="subheader item_price">€300.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name10</h5>
										<h6 class="subheader item_price">€400.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name11</h5>
										<h6 class="subheader item_price">€500.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
								<div class="large-4 small-6 columns">
									<img alt="" src="assets/images/500x500.gif">
									<div class="callout text-center simpleCart_shelfItem">
										<h5 class="item_name">Item Name12</h5>
										<h6 class="subheader item_price">€600.00</h6>
										<input type="button" class="item_add button small primary" value="Add" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="storemanaged" class="row">
						<div class="large-12 columns">
							<div class="callout">
								<div class="row">
									<div class="large-2 small-6 columns">
										<img alt="" src="assets/images/300x300.gif">
									</div>
									<div class="large-10 small-6 columns">
										<h6>This Site Is Managed By</h6><hr/><p>Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h3>Résumé de la commande</h3>
			<div class="simpleCart_items"></div>
			<div id="cartTotal">
				<p class="text-right">Coût Total : <span class="simpleCart_grandTotal"></span><br><a href="javascript:;" class="simpleCart_checkout button round success" title="Se rendre sur la plateforme de paiement">Payer</a></p>
			</div>
		</div>
		<div class="large-12 columns callout text-justify">
			<p><i>NOTA : Paiement via le système sécurisé Paypal <i class="fa fa-paypal"></i> qui utilise le protocole SSL <i class="fa fa-expeditedssl"></i> (Secure Socket Layer), de telle sorte que les informations transmises sont cryptées par un logiciel, et qu'aucun tiers ne peut en prendre connaissance au cours du transport sur le réseau. Vous n'avez pas besoin d'avoir un compte Paypal pour effectuer le réglement.</i></p>
		</div>
	</div>
</section>