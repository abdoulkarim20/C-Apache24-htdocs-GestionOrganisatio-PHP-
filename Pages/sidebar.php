<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body">
							<div>
								<img src="assets/images/faces/male/40.jpg" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info mb-2">
								<div class="user-info mb-2">
								<h4 class="font-weight-semibold text-dark mb-1"><?= strtoupper($_SESSION['Prenoms']).' '.ucfirst($_SESSION['nom']) ?></h4>
								<span class="mb-0 text-muted"></span><br>
								<span class="mb-0 text-muted">Se deconnecte</span>
								<a href="./deconnexion.php" title="" class="user-button"><i class="fa fa-power-off"></i></a>
							</div>
							</div>
						</div>
					</div>
					<ul class="side-menu">

											<?php if ($_SESSION['Groupe_User']=="Administrateur") {?>
												
												
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">UTILISATEUR</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="?C=user&M=add">AJOUTER</a></li>
								<li><a class="slide-item" href="?C=user&M=list">LISTES</a></li>
							
							</ul>
						</li>
											<?php }?>


												
											<?php if ($_SESSION['Groupe_User']=="Administrateur") {?>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">GROUPE</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="?C=groupe&M=add">AJOUTER</a></li>
								<li><a class="slide-item" href="?C=groupe&M=list">LISTES</a></li>
								
							</ul>
						</li>
											 <?php }?>
											 
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">TYPE ORGANISATION</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="?C=typeorganisation&M=add">AJOUTER</a></li>

								<li><a class="slide-item" href="?C=typeorganisation&M=list">LISTES</a></li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">ORGANISATION</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="?C=organisation&M=add">AJOUTER</a></li>

								<li><a class="slide-item" href="?C=organisation&M=list">LISTES</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">MEMBRES</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="?C=membre&M=add">AJOUTER</a></li>

								<li><a class="slide-item" href="?C=membre&M=list">LISTES</a></li>
							</ul>
						</li>	
					</ul>
				</aside>