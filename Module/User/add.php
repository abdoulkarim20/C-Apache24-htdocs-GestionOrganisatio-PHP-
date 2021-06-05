<?php




 	$sth=$dbc->prepare(" SELECT * FROM groupe ORDER BY id ASC");

    $sth->execute();
    
    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);

    //session_start();
    
    //var_dump($_SESSION['Groupe_User']);



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
												<center><h3>CEER UN COMPTE UTLISATEUR</h3></center>
												
												<!-- <p class="text-muted">Create New Account</p> -->
												<form action="Exe/add/User.php" method="POST">
												<div class="input-group mb-3">
													
													<!-- <span class="input-group-addon"><i class="fa fa-user w-7">
														
													</i></span> -->

												<select class="input-group mb-4" name="Groupe_User">
													
												<?php

												foreach ($resultat as $key) {?>
													<option><?php echo $key['nom'];  ?></option>

												<?php } ?>

													
												

												?>
												</select>
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-user  w-4"></i></span>
													<input type="text" class="form-control" name="nom" placeholder="Nom de la famille">
												</div>
													<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-user  w-4"></i></span>
													<input type="text" class="form-control" name="Prenoms" placeholder="Prenoms">
												</div>
													<div class="input-group mb-4">
													<select class="input-group mb-4" name="genre">
														
														
														<option>Masculin</option>
														<option>Feminin</option>
															
														
													</select>
												</div>
													<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-envelope  w-4"></i></span>
													<input type="Email" class="form-control" name="username" placeholder="Nom d'utilisateur doit etre de type email">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-unlock-alt  w-4"></i></span>
													<input type="password" class="form-control" name="password" placeholder="Mot de passe">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-unlock-alt  w-4"></i></span>
													<input type="password" class="form-control" name="password1" placeholder="Confirmer le mot de passe">
												</div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" />
														<span class="custom-control-label">Souviens toi de moi <a href="terms.html">conditions et politique</a></span>
													</label>
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn btn-gradient-success btn-block px-4">CREER LE COMPTE</button>
														<button type="reset" class="btn btn-danger btn-block px-4">ANNULER</button>
													</div>

												</div>
												</form>
											</div>
										</div>
								<!-- 		<div class="card text-white bg-primary py-5 d-md-down-none login-transparent">
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
