<?php 
function vers($nom_vue){
header("location:$nom_vue");
die();
}
function notifier($action, $nom){
switch ($action) {
	case "create":
echo "<div align='center' class='row cell-4 offset-4 alert alert-success'>Ajout de $nom effectué avec succès</div>" ;
		break;
			case "update":
echo "<div align='center' class=' row cell-4 offset-4 alert alert-warning'>Modification de $nom effectuée avec succès</div>" ;
		break;
			case "delete":
echo "<div align='center' class=' row cell-4 offset-4 alert alert-danger'>Suppression de $nom effectuée avec succès</div>" ;
		break;
			
	
	default:
		echo "";
		break;
}
}
function retour($phrase){
echo "	<a href='javascript:history.go(-1)'>$phrase</a>";
}
 ?>