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
.motherfuck {margin-top:1.5em; margin-bottom:1em;}
.active-tb {position: relative;box-shadow: 0 2px 10px 0 rgba(50, 50, 50, 0.5);transform: scale(1);border: 0;transition: 0.4s ease;z-index: 13; }
.active-tb:hover {position: relative;box-shadow: 0 2px 10px 0 rgba(50, 50, 50, 0.5);transform: scale(1.15);border: 0;z-index: 15; }
.button-group {position: relative;display: inline-block;margin: .5em 0; }
.button-group:before {content: attr(data-grouptype);z-index: 99999;color: #999;display: block;font-size: .9em;padding: 0.5em;border-radius: 50%;background: #fff;position: absolute;left: 40.5%;top: 0.55em; }
.button-group button + button {margin-left: 15px !important; }
.simpleCart_items table {width:100%;}
.simpleCart_shelfItem {padding-bottom:1em;}
.simpleCart_grandTotal {font-weight:bold;}
</style>
<section class="margtop">
	<div class="row">
		<div class="large-8 small-12 columns">
			<div class="">
				<h3>Header</h3>
				<h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.</h5>
			</div>
		</div>
		<div class="large-4 small-12 columns">
			<div class="callout">
				<h6><i class="fa fa-shopping-cart"></i> : <span class="simpleCart_total"></span> (<span class="simpleCart_quantity"></span> items)  <a href="javascript:;" class="simpleCart_empty"><i class="fa fa-trash-o"></i></a></h6>
			</div>
		</div>
	</div>
	<div class="row motherfuck"> 
		<div class="large-4 medium-4 columns">
			<ul class="pricing-table active-tb shadow mrgn-20-top simpleCart_shelfItem">
				<li class="title item_name">Starter 1</li>
				<li class="bullet-item">512 MB RAM</li>
				<li class="bullet-item">50GB Disk</li>
				<li class="bullet-item">1 User</li>
				<li class="bullet-item">4TB bandwidth</li>
				<li class="price item_price">€19</li>
				<!--li class="cta-button"><a class="item_add button text-transform">Choose</a></li-->
				<li class="cta-button">
					<div class="button-group" data-grouptype="OR">
						<button href="#" class="item_add small button primary radius text-transform">Buy it now</button>
						<button href="#" class="small button success radius text-transform">Learn More</button>
					</div>
				</li>
			</ul>
		</div>
		<div class="large-4 medium-4 columns">
			<ul class="pricing-table active-tb shadow mrgn-20-top simpleCart_shelfItem">
				<li class="title item_name">Starter 2</li>
				<li class="bullet-item">512 MB RAM</li>
				<li class="bullet-item">50GB Disk</li>
				<li class="bullet-item">1 User</li>
				<li class="bullet-item">4TB bandwidth</li>
				<li class="price item_price">€29</li>
				<li class="cta-button">
					<div class="button-group" data-grouptype="OR">
						<button href="#" class="item_add small button primary radius text-transform">Buy it now</button>
						<button href="#" class="small button success radius text-transform">Learn More</button>
					</div>
				</li>
			</ul>
		</div>
		<div class="large-4 medium-4 columns">
			<ul class="pricing-table active-tb shadow mrgn-20-top simpleCart_shelfItem">
				<li class="title item_name">Starter 3</li>
				<li class="bullet-item">512 MB RAM</li>
				<li class="bullet-item">50GB Disk</li>
				<li class="bullet-item">1 User</li>
				<li class="bullet-item">4TB bandwidth</li>
				<li class="price item_price">€39</li>	
				<li class="cta-button">
					<div class="button-group" data-grouptype="OR">
						<button href="#" class="item_add small button primary radius text-transform">Buy it now</button>
						<button href="#" class="small button success radius text-transform">Learn More</button>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h3>Résumé de la commande</h3>
			<div class="simpleCart_items"></div>
			<div id="cartTotal">
				<p class="text-right">Coût Total : <span class="simpleCart_grandTotal"></span><br><a href="javascript:;" class="simpleCart_checkout medium button success" title="Se rendre sur la plateforme de paiement">Payer</a> </p>
			</div>
		</div>
		<div class="large-12 columns callout alert text-justify">
			<i>NOTA : Paiement via le système sécurisé Paypal <i class="fa fa-paypal"></i> qui utilise le protocole SSL <i class="fa fa-expeditedssl"></i> (Secure Socket Layer), de telle sorte que les informations transmises sont cryptées par un logiciel, et qu'aucun tiers ne peut en prendre connaissance au cours du transport sur le réseau. Vous n'avez pas besoin d'avoir un compte Paypal pour effectuer le réglement.</i>
		</div>
	</div>
</section>