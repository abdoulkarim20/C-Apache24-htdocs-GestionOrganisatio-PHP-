<?php
if(!empty($_POST)){
    if(!empty($_POST['username']) AND !empty($_POST['password'])){
        require_once("config.php");
        $sql="SELECT * FROM users WHERE username=:username AND password=:password";
        $sth=$dbc->prepare($sql);
        $sth->execute([
            'username'=>$_POST['username'],
            'password'=>$_POST['password']
        ]);
        $admin=$sth->fetch();
        if($admin){
        	//extract($admin);

         session_start();

         $_SESSION['id'] = $admin['id'];
         $_SESSION['Groupe_User']=$admin['Groupe_User'];
         $_SESSION['nom']=$admin['nom'];
         $_SESSION['Prenoms']=$admin['Prenoms'];
         $_SESSION['genre']=$admin['genre'];
         $_SESSION['username']=$admin['username'];
         $_SESSION['password']=$admin['password'];

           
            // $_SESSION['admin']=$admin;
            

        echo" <script>
             alert('Bienvenue ".$admin['Prenoms']."  ".$admin['nom']." dans votre espace Admin !');
             document.location.href='index.php';
             </script>"; die();

        }else{
            $_SESSION['flash']['danger']="eamil ou mot de passe incorrect";

              echo" <script>
             alert('Login ou password incorrect!!!');
             document.location.href='connexion.php';
             </script>"; die();
        }
       
    }
    
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
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="text-center mb-6">
								<img src="assets/images/brand/logo.png" class="" alt="">
							</div>
							<div class="row justify-content-center">
								<div class="col-md-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<h1><center>Espace Admin</center></h1>
												<p class="text-muted">Connectez-vous à votre compte</p>
											<form action="" method="POST">
													<div class="input-group mb-3">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" class="form-control" name="username" placeholder="Username">
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
													<input type="password" class="form-control" name="password" placeholder="Password">
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn btn-gradient-success btn-block">SE CONNECTER</button>
													</div>
											</form>
													<div class="col-12">
											
														<!-- <a href="forgot-password.html" class="btn btn-link box-shadow-0 px-0">Forgot password?</a> -->
													</div>
												</div>
											</div>
										</div>
<!-- 										<div class="card text-white bg-primary py-5 d-md-down-none login-transparent">
											<div class="card-body text-center justify-content-center ">
												<h4>Espace reserver uniquement aux administrateurs</h4>
												<p>
Une session est un mécanisme technique permettant de sauvegarder temporairement sur le serveurdes informations relatives à un internaute. Ce système a notamment été inventé pour palier au fait que le protocole HTTP agit en mode non connecté. </p>
												
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
