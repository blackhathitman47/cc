<?php 
include "m.php";
include "helpergarage.php";
/*action => a
table =>t
data<=>POST,GET
id=>*/
extract($_GET);//$a,$t
extract($_POST);//$libelle,$prix
switch ($a) {
	case 'create':
	
		$ch="";
		if (isset($_FILES)) {
			$ch=charger_fichier	($_FILES['image']);
		$_POST['chemin']=$ch ;
		}

		ajouter($t, $_POST);
		break;
		case 'delete':
		supprimer($id, $t);
		break;
		case 'show':
		vers("show.php?id=$id");
		break;
		case 'edit':
		vers("edit.php?id=$id");
		break;
		case 'update':
		modifier($t,$_POST, $id);
		break;	
		default:
		// code...
		break;
}
vers("voiture.php?action=$a");
 ?>