<?php

   // require_once("../../DB.php");

    $sth=$dbc->prepare(" SELECT * FROM users ORDER BY id DESC");

    $sth->execute();

    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="side-app">

						<div class="row">
							<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">LA LISTE DES ADMINISTRATEURS</div>
								</div>
								<div class="card-body">
                                	<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered w-100">
										<thead>
											<tr>
													<th class="wd-15p">Identifiant</th>
													<th class="wd-15p">Groupe</th>
													<th class="wd-15p">Nom</th>
													<th class="wd-15p">Prenoms</th>
													<th class="wd-15p">Genre</th>
													<th class="wd-15p">Nom d'utilisateur</th>
													<th class="wd-15p"><center>ACTION</center></th>
													


													

											
										</thead>
										<tbody>
											<tr>
													<?php

														foreach ($resultat as $key) { ?>

													<td><?php echo $key['id']; ?></td>
													<td ><?php echo $key['Groupe_User']; ?></td>
													<td ><?php echo $key['nom']; ?></td>
													<td ><?php echo $key['Prenoms']; ?></td>
													<td ><?php echo $key['genre']; ?></td>
													<td ><?php echo $key['username']; ?></td>

											
														
														

													
												<td><center>

												 <a class="btn btn-sm btn-success" href="?C=user&M=edit&id=<?php echo $key['id']; ?>"><i class="fa fa-edit"></i></a>

									              <a class="btn btn-sm btn-danger" href="Exe/delete/User.php?id=<?php echo $key['id']; ?>"><i class="fa fa-trash"></i></a></center>
    
									            </td>
													
															
												
												

												</tr>

											<?php } ?>
											
										</tbody>
									</table>
								</div>
                                </div>
								<!-- table-wrapper -->
							</div>
							<!-- section-wrapper -->

							</div>
						</div>
					</div>
					

