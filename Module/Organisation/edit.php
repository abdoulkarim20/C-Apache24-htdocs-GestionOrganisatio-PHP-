<?php

//require_once("../../DB.php");


if(!empty($_GET['id'])){
    $id=$_GET['id'];

    //Ici je requpere l'organisation qui me sont venu par poste
  

   $sql="SELECT * FROM organisations WHERE id=$id ";
   $sth=$dbc->prepare($sql);
   $sth->execute();
   $user=$sth->fetch();
   //var($user);
    }
    //Ici je requpere les types organisation

    $sth=$dbc->prepare(" SELECT * FROM typeorganisation ORDER BY id ASC");

    $sth->execute();
    
    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#ff685c">
		<meta name="theme-color" content="#32cafe">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Spain – Admin Bootstrap4 Responsive Webapp Dashboard Template</title>
		<link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="assets/css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

	</head>
	<body class="login-img">
		<div class="page">
			<div class="page-single">
				<div class="container-fluid">
					<div class="row">
						<div class="col mx-auto">
							<div class="text-center mb-6">
								<!-- <img src="assets/images/brand/logo.png" class="" alt=""> -->
							</div>
							<div class="row justify-content-center">
								<div class="col-md-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<center><h3>MISE A JOUR DE L'ORGANISATION</h3></center>
												<!-- <p class="text-muted">Create New Account</p> -->
												<form action="Exe/edit/Organisation.php" method="">
													<input type="hidden" class="form-control" name="id" placeholder="Entre votre Nom" name="id" value="<?=$user['id']?>">
												<div class="input-group mb-3">

												</div>
												<div class="input-group mb-4">
													
													<input type="text" class="form-control" name="nom" value="<?= $user['nom']?>" placeholder="Entre votre Nom">
												</div>
													<div class="input-group mb-4">
													
													<input type="text" class="form-control" name="ZoneIntervention" value="<?=$user['ZoneIntervention']?>" placeholder="Entre votre ZoneIntervention">
												</div>
												<div class="input-group mb-4">
											
												</div>
													<div class="input-group mb-4">
												
													<input type="text" class="form-control" name="theme"  value="<?= $user['theme']?>" placeholder="Enter theme doit etre de type email">
												</div>
												<div class="input-group mb-4">
													
													<input type="text" class="form-control" name="contact"  value="<?= $user['contact']?>" placeholder="Mot de passe">
												</div>
												<div class="input-group mb-4">
													
													<input type="text" class="form-control" name="adresse"  value="<?= $user['adresse']?>" placeholder="Mot de passe">
												</div>

												<div class="input-group mb-3">
												<select class="input-group mb-3" name="type_organisations" value="<?=$user['type_organisations']?>">
													<option><?=$user['type_organisations']?></option>
												<?php

												foreach ($resultat as $key) {?>

													<option ><?php echo $key['libelle'];  ?></option>

												<?php } ?>

												?>
												</select>
												</div>

												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn btn-gradient-success btn-block px-4">METTRE A JOUR</button>
														<a class="btn btn-block btn-lg btn-danger" href="?C=organisation&M=list"></i>ANNULER</a>
													</div>

												</div>
												</form>
											</div>
										</div>
										<!-- <div class="card text-white bg-primary py-5 d-md-down-none login-transparent">
											<div class="card-body text-center">
												<div>
													<h1>ESPACE RESERVER UNIQUEMENT AUX SUPERS ADMINISTRATEURS</h1>
													<p>Cet espace admin est consacrer uniquement au administrateur avec qui font partir du groupe d'administration "Administrateur" donc il est le seul qui est habiliter a creer un compte d'administration. Pour creer un compte administrateur vous avez trois choix a faire pour le groupe d'utilisateur soit l'adminstrateur fait partir de groupe "Administrateur ou Editeur ou bien Contribiteur"</p>
													
												</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Dashboard js -->
		<script src="./assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="./assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="./assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="./assets/js/vendors/selectize.min.js"></script>
		<script src="./assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="./assets/js/vendors/circle-progress.min.js"></script>
		<script src="./assets/plugins/rating/jquery.rating-stars.js"></script>
		
		<!-- Custom scroll bar Js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
		
	</body>
</html>
