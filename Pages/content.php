<?php

if (!empty($_GET['C'])) {
	switch ($_GET['C']) {
		case 'user':
			require_once './Module/User/index.php';
			break;
			case 'groupe':
				require_once './Module/Groupe/index.php';
				break;
				case 'etudiant':
					require_once './Module/Etudiant/index.php';
					break;
					case 'admission':
						require_once './Module/Admission/index.php';
						break;
						case 'institut':
							require_once './Module/Institut/index.php';
							break;
							case 'paiement':
								require_once './Module/Paiement/index.php';
								break;
								case 'typeorganisation':
									require_once './Module/TypeOrganisation/index.php';
									break;
									case 'organisation':
										require_once './Module/Organisation/index.php';
										break;
										case 'membre':
											require_once './Module/Membre/index.php';
											break;

		
		default:
			require_once './503.php';
			break;
	}
}







?>