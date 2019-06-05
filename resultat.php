<?php 
	require("autoloadclass.php");
	if(isset($_POST["recherchenom"]))
	{
		if($_POST["recherchenom"]!=="")
		{
			$nom = $_POST['recherchenom'];
			$db = Database::getconnexion();
			$gestionart = new Gestionartiste($db);
			$artistes = $gestionart->recherche_nom_pseudo($nom);
			//var_dump($artistes); die();
				
		}

		if($_POST["rechercheart"]!=="")
		{
			$discipline = $_POST['rechercheart'];
			$db = Database::getconnexion();
			$gestionart = new Gestionartiste($db);
			$artistes = $gestionart->recherche_discipline($discipline);
			var_dump($artistes); die();
		}
	}


 ?>