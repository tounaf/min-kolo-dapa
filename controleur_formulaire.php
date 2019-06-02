<?php 
	require("autoloadclass.php");

	if(isset($_POST["nom"]))
	{
		//$_POST["photo"]  = $_FILES["photo"]["name"];
		//$tmp = $_FILES["photo"]["tmp_name"];
		//move_uploaded_file($tmp, "image/".$_POST["photo"]);
		//$_POST["photo"]  = "image/".$_POST["photo"];
		$artiste = new Artiste($_POST);
		$db = Database::getconnexion();
		$gestionart = new Gestionartiste($db);
		$gestionart->insertartiste($artiste);
		header('Location:formulaire.php');
	}



?>