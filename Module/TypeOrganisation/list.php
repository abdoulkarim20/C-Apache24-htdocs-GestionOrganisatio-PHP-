<?php

   // require_once("../../DB.php");

    $sth=$dbc->prepare(" SELECT * FROM typeorganisation ORDER BY id DESC");

    $sth->execute();

    $resultat=$sth->fetchAll(PDO::FETCH_ASSOC);


?>

					<div class="side-app">

						<div class="row">
							<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">LES TYPES D'ORGANISATIONS</div>
								</div>
								<div class="card-body">
                                	<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered w-100">
										<thead>
											<tr>
													<th class="wd-15p">Identifiant</th>
													<th class="wd-15p">Type d'organisation</th>													
													<th class="wd-15p"><center>OPTION</center></th>
		
										</thead>
										<tbody>
											<?php

													foreach ($resultat as $key) { ?>

													<td><?php echo $key['id']; ?></td>
													<td><?php echo $key['libelle']; ?></td>

									            <td><center>
									              <a class="btn btn btn-success" href="?C=typeorganisation&M=edit&id=<?php echo $key['id']; ?>"><i class="fa fa-edit"></i></a>
									              <a class="btn btn btn-danger" href="Exe/delete/TypeOrganisation.php?id=<?php echo $key['id']; ?>"><i class="fa fa-trash"></i></a></center>
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




