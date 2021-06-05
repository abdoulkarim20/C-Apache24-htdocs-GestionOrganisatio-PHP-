<?php
session_start();
    require_once("config.php");
    
    $_SESSION['username'];
    
    if(!($_SESSION['username'])){

         header("Location:connexion.php");
    }

     
         $_SESSION['id'];
         $_SESSION['Groupe_User'];
         $_SESSION['nom'];
         $_SESSION['Prenoms'];
         $_SESSION['genre'];
         $_SESSION['username'];
         $_SESSION['password'];
    //var_dump($_SESSION);


?>



<!doctype html>
<html lang="en" dir="ltr">



<?php

require_once 'Pages/header.php';

?>


	<body class="app sidebar-mini rtl">
		<!-- <div id="global-loader" ></div> -->
		<div class="page">
			<div class="page-main">


				<?php

				require_once 'Pages/navbar.php';



				?>

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				

				<?php

				require_once 'Pages/sidebar.php';



				?>

				<div class="app-content  my-3 my-md-5">
					

					<?php

					if (empty($_GET['C'])) {

						require_once 'Pages/main.php';
						
					}else{

						require_once 'Pages/content.php';
					}



					?>
					<!--footer-->

					<?php

					require_once 'Pages/footer.php';




					?>

					<!-- End Footer-->
				</div>
			</div>
		</div>
		<div class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel2">Enter Project Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="listname">Project name</label>
								<input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
							</div>
							<div class="form-group">
								<label for="listname">Backend</label>
								<select name="Language" id="select-Language" class="form-control custom-select">
									<option value="ph" data-data="">PHP</option>
									<option value="aj" data-data="">Angular js</option>
									<option value="jv" data-data="">Java</option>
									<option value="nt" data-data="" selected="">.Net</option>
									<option value="py" data-data="" >Phython</option>
									<option value="js" data-data="" >Javascript</option>
									<option value="ui" data-data="" >UI Design</option>
								</select>
							</div>
							<div class="form-group">
								<label >Deadline</label>
								<input type="Date" name="Date" class="form-control">
							</div>
							<div class="form-group">
								<label for="listname">Team Members</label>
								<input type="text" class="form-control" name="listname" id="listname2" placeholder="How many Team memebers?">
							</div>
							<div class="form-group">
								<label for="listname">Description</label>
								<textarea class="form-control" name="example-textarea-input" rows="3" placeholder="text here.."></textarea>
							</div>
							<div class="form-group">
								<label>Add a list item</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="example-file-input-custom">
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-block btn-primary">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		
		<?php

		require_once 'Pages/js.php';



		?>

	</body>
</html>