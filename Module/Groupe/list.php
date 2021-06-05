<?php

   // require_once("../../DB.php");

    $sth=$dbc->prepare(" SELECT * FROM groupe ORDER BY id DESC");

    $sth->execute();

    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);


?>

					<div class="side-app">

						<div class="row">
							<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">LA LISTE DE GROUPE DES UTILISATEURS</div>
								</div>
								<div class="card-body">
                                	<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered w-100">
										<thead>
											<tr>
													<th class="wd-15p">Identifiant</th>
													<th class="wd-15p">Nom du groupe</th>
													
													<th class="wd-15p">Description</th>
													
													<th class="wd-15p"><center>ACTION</center></th>
												
													

											
										</thead>
										<tbody>
											<tr>
													<?php

														foreach ($resultat as $key) { ?>
															

													<td><?php echo $key['id']; ?></td>
													
													<td ><?php echo $key['nom']; ?></td>
													<td ><?php echo $key['description']; ?></td>
												

											
														
														

													
												<td><center>

												 <a class="btn btn-sm btn-success" href="?C=groupe&M=edit&id=<?php echo $key['id']; ?>"><i class="fa fa-edit"></i></a>

									              <a class="btn btn-sm btn-danger" href="Exe/delete/Groupe.php?id=<?php echo $key['id']; ?>"><i class="fa fa-trash"></i></a></center>
   
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

						