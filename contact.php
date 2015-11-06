<!DOCTYPE HTML>
<html>

	<head>

	 <?php include("head.html"); ?>


	 <title>Yé Mistikrik? - Accueil</title>

	</head>


	<body>

	
		<div class="container">

			<!--Logo en haut de page-->
			<header class="row col-sm-12">
				<div class="page-header">
					<img src="../images/logo_nom.png" id="logo">
				</div>
			</header>




			<div class="row col-sm-12" >
				<nav class="col-sm-2">
					<ul class="nav nav-pills nav-stacked" >
						<li> <a href="accueil.php"> <span class="glyphicon glyphicon-home" style="color:#000"></span> Accueil </a> </li>
						<li class="active"> <a href="contact.php"> <span class="glyphicon glyphicon-envelope"  style="color:#000" > </span> Contact </a> </li>
						<li> <a href="photo.php"> <span class="glyphicon glyphicon-camera" style="color:#000"></span> Espace Photo </a> </li>
						<li> <a href="troupe.php"> <span class="glyphicon glyphicon-user" style="color:#000"></span> La Troupe </a> </li>
					</ul>
				</nav>







					<section class="col-sm-10">
						<div class="jumbotron" style="text-align:justify">
                            <h1>Nous contacter</h1><br/><br/><br/><br/><br/><br/>


							<p>Depuis quelques années est apparu un genre nouveau : le théâtre témoignage. Les premiers spectacles abordaient la question des drames vécus par les personnes ayant subi des licenciements économiques (Les yeux rouges pour les employés de Lip ; 501 blues pour ceux de Levis). Puis sont apparus des spectacles témoignant des horreurs des génocides de la fin du xxe siècle : Olivier Py et son Requiem pour Srebrenica, ou encore Jacques Delcuvellerie avec Rwanda 94.</p><br/><br/><br/><br/>

							<!--Formulaire d'envoi de mail-->
							<form id="form" action="form.php" method="post" class="form-horizontal" novalidate="true"  role="form">
								<div><input name="my-contact-form" type="hidden" value="1"  class="form-control"></div>
								<fieldset>
									<legend>N'hesitez pas à nous contacter !</legend>

									<!--Nom-->
									<div class="form-group">
										<label for="name" class="col-sm-4 control-label">Votre nom</label>
										<div class="col-sm-8">
											<input id="name" name="name" type="text" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Email-->
									<div class="form-group">
										<label for="email" class="col-sm-4 control-label">Votre email</label>
										<div class="col-sm-8">
											<input id="email" name="email" type="email" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Objet du mail-->
									<div class="form-group">
										<label for="object" class="col-sm-4 control-label">Objet </label>
										<div class="col-sm-8">
											<input id="object" name="object" type="text" value="" required="required" class="form-control">
										</div>
									</div>

									<!--Message-->
									<div class="form-group">
										<label for="message" class="col-sm-4 control-label">Votre message</label>
										<div class="col-sm-8">
											<textarea id="message" name="message" cols="30" rows="4" required="required" class="form-control"></textarea>
										</div>
									</div>

									<!--Boutton d'envoi-->
									<div class="form-group">
										<div class="col-sm-offset-4 col-sm-8">
											<button type="submit" name="submit-btn"  style="background-color:#5919B8" value="1" class="btn btn-success">Envoyer</button>
										</div>
									</div>
								</fieldset>
							</form>
					     </div>
					</section>
    				
			</div>
		</div>
	</body>

	

</html>