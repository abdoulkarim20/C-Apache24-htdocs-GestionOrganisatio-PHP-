<?php

if (!empty($_GET['M'])) {
	switch ($_GET['M']) {
		case 'add':
			require_once 'add.php';
			break;
			case 'list':
				require_once 'list.php';
				break;
				case 'edit':
					require_once 'edit.php';
					break;
		
		default:
			require_once './503.php';
			break;
	}
}




?>