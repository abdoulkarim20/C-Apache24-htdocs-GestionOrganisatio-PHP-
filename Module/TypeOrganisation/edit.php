<?php

//require_once("../../DB.php");


if(!empty($_GET['id'])){
    $id=$_GET['id'];
  

   $sql="SELECT * FROM typeorganisation WHERE id=$id ";
   $sth=$dbc->prepare($sql);
   $sth->execute();
   $user=$sth->fetch();
   //var($user);
    }




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
												<center><h3>METTRE A JOUR LE TYPE D'ORGANISATION</h3></center>
												
												<form action="Exe/edit/TypeOrganisation.php" method="">
													<input type="hidden" class="form-control" name="id" name="id" value="<?=$user['id']?>">
												
												<div class="input-group mb-4">
													<input type="text" class="form-control" name="libelle" value="<?=$user['libelle']?>" placeholder="Entrez le type de l'organisation">
												</div>

												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn btn-gradient-success btn-block px-4">METTRE A JOUR</button>
														<a class="btn btn-block btn-lg btn-danger" href="?C=typeorganisation&M=list"></i>ANNULER</a>
													</div>

												</div>
												</form>
											</div>
										</div>
										
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
