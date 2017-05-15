<!--? $cache_enable = false; ?-->
<style>#formulaire input,#formulaire textarea{font-size:.95em;} #formulaire legend {font-size:1.1em; font-weight:bold;}</style>
<section class="row margtop">
	<header><h1 class="text-center">oh oh !!</h1></header>
	<div class="large-12 columns">
		<h3>Formulaire de renseignements</h3>
		<form name="contact_form" action="inc/_inscripdiver.php" method="post" accept-charset="utf-8" enctype="application/x-www-form-urlencoded">
			<fieldset>
				<legend>Séjour</legend>
				<div class="row">
					<div class="large-3 columns">
						<label>du</label>
						<input type="date" name="sej_1" value="<?php echo $_GET['sej_1'];?>">
					</div>
					<div class="large-3 columns">
						<label>au</label>
						<input type="date" name="sej_2" value="<?php echo $_GET['sej_2'];?>">
					</div>
					<div class="large-3 columns">
						<label>Hôtel</label>
						<input type="text" name="sej_3" value="<?php echo $_GET['sej_3'];?>">
					</div>
					<div class="large-3 columns">
						<label>Tour opérateur</label>
						<input type="text" name="sej_4" value="<?php echo $_GET['sej_4'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-3 columns">
						<label>Heure d'arrivée</label>
						<input type="time" name="sej_5" value="<?php echo $_GET['sej_5'];?>">
					</div>
					<div class="large-3 columns">
						<label>Heure de décollage</label>
						<input type="time" name="sej_6" value="<?php echo $_GET['sej_6'];?>">
					</div>
					<div class="large-6 columns"></div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Plongeur</legend>
				<div class="row">
					<div class="large-3 columns">
						<label>Nom</label>
						<input type="text" name="diver_1" value="<?php echo $_GET['diver_1'];?>" required>
					</div>
					<div class="large-3 columns">
						<label>Prénom</label>
						<input type="text" name="diver_2" value="<?php echo $_GET['diver_2'];?>">
					</div>
					<div class="large-3 columns">
						<label>Date de naissance</label>
						<input type="date" name="diver_3" value="<?php echo $_GET['diver_3'];?>">
					</div>
					<div class="large-3 columns">
						<label>Nationalité</label>
						<input type="text" name="diver_4" value="<?php echo $_GET['diver_4'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-5 columns">
						<label>Adresse</label>
						<input type="text" name="diver_5" value="<?php echo $_GET['diver_5'];?>">
					</div>
					<div class="one columns">
						<label>CP</label>
						<input type="text" name="diver_6" value="<?php echo $_GET['diver_6'];?>">
					</div>
					<div class="large-3 columns">
						<label>Ville</label>
						<input type="text" name="diver_7" value="<?php echo $_GET['diver_7'];?>">
					</div>
					<div class="large-3 columns">
						<label>Pays</label>
						<input type="text" name="diver_8" value="<?php echo $_GET['diver_8'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-3 columns">
						<label>Téléphone</label>
						<input type="tel" name="diver_9" value="<?php echo $_GET['diver_9'];?>">
					</div>
					<div class="large-3 columns">
						<label>Portable</label>
						<input type="tel" name="diver_10" value="<?php echo $_GET['diver_0'];?>" required>
					</div>
					<div class="large-3 columns">
						<label>Email</label>
						<input type="email" name="diver_11" value="<?php echo $_GET['diver_11'];?>" required>
					</div>
					<div class="large-3 columns">
						<label>Site internet</label>
						<input type="url" name="diver_12" value="<?php echo $_GET['diver_12'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>Niveau de plongée</label>
						<input type="text" name="diver_13" value="<?php echo $_GET['diver_13'];?>" required>
					</div>
					<div class="large-3 columns">
						<label>N° PADI</label>
						<input type="text" name="diver_14" value="<?php echo $_GET['diver_14'];?>">
					</div>
					<div class="large-3 columns">
						<label>N° CMAS ou FFESSM</label>
						<input type="text" name="diver_15" value="<?php echo $_GET['diver_15'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-3 columns">
						<label>Nombre de plongées</label>
						<input type="number" name="diver_16" value="<?php echo $_GET['diver_16'];?>" required>
					</div>
					<div class="large-3 columns">
						<label>Date dernière plongée</label>
						<input type="date" name="diver_17" value="<?php echo $_GET['diver_17'];?>">
					</div>
					<div class="large-3 columns">
						<label>Date Certif. Médical</label>
						<input type="date" name="diver_18" value="<?php echo $_GET['diver_18'];?>">
					</div>
					<div class="large-3 columns">
						<label>N° Assurances (DAN)</label>
						<input type="text" name="diver_19" value="<?php echo $_GET['diver_19'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Allergies - Problèmes médicaux</label>
						<textarea name="diver_20" placeholder="Indiquez nous si vous avez des antécédents médicaux influençant la pratique de la plongée autonome"><?php echo $_GET['diver_20'];?></textarea>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>En cas d'urgence</legend>
				<div class="row">
					<div class="large-5 columns">
						<label>Nom et Prénom de la personne à contacter</label>
						<input type="text" name="safety_1" value="<?php echo $_GET['safety_1'];?>">
					</div>
					<div class="large-2 columns">
						<label>Téléphone</label>
						<input type="tel" name="safety_2" value="<?php echo $_GET['safety_2'];?>">
					</div>
					<div class="large-3 columns">
						<label>Email</label>
						<input type="email" name="safety_3" value="<?php echo $_GET['safety_3'];?>">
					</div>
					<div class="large-2 columns">
						<label>Pays</label>
						<input type="text" name="safety_4" value="<?php echo $_GET['safety_4'];?>">
					</div>
				</div>
				<div class="row">
					<div class="large-5 columns">
						<label>Nom et Prénom de votre médecin</label>
						<input type="text" name="safety_5" value="<?php echo $_GET['safety_5'];?>">
					</div>
					<div class="large-2 columns">
						<label>Téléphone</label>
						<input type="tel" name="safety_6" value="<?php echo $_GET['safety_6'];?>">
					</div>
					<div class="large-3 columns">
						<label>Email</label>
						<input type="email" name="safety_7" value="<?php echo $_GET['safety_7'];?>">
					</div>
					<div class="large-2 columns">
						<label>Pays</label>
						<input type="text" name="safety_8" value="<?php echo $_GET['safety_8'];?>">
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Liste des équipements désirés</legend>
				<div class="row">
					<div class="large-2 columns">
						<label class="text-right">Masque <input type="checkbox" name="mat_1"></label>
					</div>
					<div class="large-2 columns">
						<label class="text-right">Tuba <input type="checkbox" name="mat_2"></label>
					</div>
					<div class="large-2 columns">
						<label class="text-right">Palmes <input type="checkbox" name="mat_3"><br><input type="number" name="mat_4" placeholder="Taille"></label>
					</div>
					<div class="large-2 columns">
						<label class="text-right">Shorty 5mm <input type="checkbox" name="mat_5"><br>
							<select name="mat_6">
								<option>Taille</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</label>
					</div>
					<div class="large-2 columns">
						<label class="text-right">Gilet "Stab" <input type="checkbox" name="mat_7"><br>
							<select name="mat_8">
								<option value="">Taille</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
								<option value="XXL">XXL</option>
							</select>
						</label>
					</div>
					<div class="large-2 columns">
						<label>Détendeurs <input type="checkbox" name="mat_9"></label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Autre : </label>
						<textarea name="mat_10" placeholder="Indiquez nous si vous avez besoin d'équipements spécifiques"><?php echo $_GET['mat_9'];?></textarea>
						<p><small><em>* Conformément à la législation, nous ne fournissons pas de mélange NITROX (EAN)</em></small></p>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Prestations souhaîtées</legend>
				<div class="row">
					<div class="large-4 columns">
						<label><a href="index.php?page=formation" rel="external" title="Se rendre sur la page des formation">Formation</a></label>
						<select name="presta_1">
							<option value="Aucune">Aucune</option>
							<option value="Bubble Diver">Bubble Diver</option>
							<option value="Discover Scuba Diving">Discover Scuba Diving</option>
							<option value="Scuba Diver">Scuba Diver</option>
							<option value="Open Water Diver">Open Water Diver</option>
							<option value="Advanced Open Water Diver">Advanced Open Water Diver</option>
							<option value="Emergency First Response">Emergency First Response</option>
							<option value="Rescue Diver">Rescue Diver</option>
							<option value="Divemaster">Divemaster</option>
							<option value="Validation milieu naturel">Validation milieu naturel</option>
						</select>
					</div>
					<div class="large-8 columns">
						<label><a href="index.php?page=plongee" rel="external" title="Se rendre sur la page des explorations">Explorations</a></label>
						<textarea name="presta_2" placeholder="Indiquez nous le programme d'exploration que vous désirez réaliser lors de votre séjour"><?php echo $_GET['presta_2'];?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<p></p>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Comment nous avez vous connu ?</legend>
				<div class="row">
					<div class="large-2 columns">
						<label>Internet <input type="checkbox" name="connu_1"></label>
					</div>
					<div class="large-2 columns">
						<label>Agence <input type="checkbox" name="connu_2"></label>
					</div>
					<div class="large-2 columns">
						<label>Magazine <input type="checkbox" name="connu_3"></label>
					</div>
					<div class="large-2 columns">
						<label>Club <input type="checkbox" name="connu_4"></label>
					</div>
					<div class="large-2 columns">
						<label>Ami <input type="checkbox" name="connu_5"></label>
					</div>
					<div class="large-2 columns">
						<label>Autre <input type="checkbox" name="connu_6"></label>
					</div>
				</div>
			</fieldset>
			<div class="row text-center">
				<div class="small-4 small-centered columns text-center"><input name="verif_box" type="text" placeholder="Saisissez ici le code de l'image ci-dessous"/></div>
			</div>
			<div class="row text-center">
				<div class="small-4 small-centered columns text-center"><img src="inc/_verifimage.php?<?php echo rand(0,9999);?>" alt="verification" width="75" height="36" /></div>
			</div>
			
			<?php if(isset($_GET['wrong_code'])){?>
			<div class="row">
				<div class="small-4 small-centered columns text-center">
					<p><div id="contact_form_errorloc" class="error_strings">Mauvais code !</div></p> 
				</div>
			</div>
			<?php ;}?>
		
			<div class="row">
				<div class="small-4 small-centered columns text-center">
					<br>
					<input class="button secondary medium" name="Submit" type="submit" value="Envoyer"/>
					<input type="hidden" name="email" value="" />
					<input type="hidden" name="good_url" value="index.php?page=merci">
				</div>
			</div>
		</form>
	</div>
</section>