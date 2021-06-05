<?php

   // require_once("../../DB.php");

    $sth=$dbc->prepare(" SELECT * FROM organisations ORDER BY id DESC");

    $sth->execute();

    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="side-app">

						<div class="row">
							<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">LA LISTE DES ORGANISATIONS</div>
								</div>
								<div class="card-body">
                                	<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered w-100">
										<thead>
											<tr>
													<th class="wd-15p">Identifiant</th>
													<th class="wd-15p">Non</th>
													<th class="wd-15p">Zone d'intervention</th>
													<th class="wd-15p">Theme</th>
													<th class="wd-15p">contact</th>
													<th class="wd-15p">Adresse</th>
													<th class="wd-15p">Le type d'organisation</th>
													<th class="wd-15p"><center>ACTION</center></th>
													


													

											
										</thead>
										<tbody>
											<tr>
													<?php

														foreach ($resultat as $key) { ?>

													<td><?php echo $key['id']; ?></td>
													<td ><?php echo $key['nom']; ?></td>
													<td ><?php echo $key['ZoneIntervention']; ?></td>
													<td ><?php echo $key['theme']; ?></td>
													<td ><?php echo $key['contact']; ?></td>
													<td ><?php echo $key['adresse']; ?></td>
													<td ><?php echo $key['type_organisations']; ?></td>
		
												<td><center>

												 <a class="btn btn-sm btn-success" href="?C=organisation&M=edit&id=<?php echo $key['id']; ?>"><i class="fa fa-edit"></i></a>

									              <a class="btn btn-sm btn-danger" href="Exe/delete/Organisation.php?id=<?php echo $key['id']; ?>"><i class="fa fa-trash"></i></a></center>
    
									            </td>
													
															
												
												

												</tr>

											<?php } ?>
											
										</tbody>
									</table>
								</div>
                                </div>
								
							</div>
						

							</div>
						</div>
					</div>
					

