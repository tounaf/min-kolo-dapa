<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8" />
	<title>page de recherche</title>
	<link rel="stylesheet" type="text/css" href="recherche.css">
</head>
<body>
	<?php 
		include('nav.php');
	 ?>
		<form method = "post" action = "#">
			<fieldset>
				<legend>page de recherche</legend>
				<div class = "logo" >logo de l'outil</div>
				<div class = "globalrech">
					<input type ="text" name = "rechercheglobal" placeholder = "rechercheglobal" class = "textglobal">
					<input type = "submit" name = "rechercher" value = "Recherche" class = "button_rech">
				</div>
				<div class = "recherche_par">
					<div class = "conteneur_label">
						<label for = "recherchenom" class = "label_nom" >Nom ou Pseudo </label>
						<input type = "text" name = "recherchenom" class = "recherchenom">
					</div>
					<div class = "conteneur_label">
						<label for = "rechercheart" class = "label_discipline">Discipline artistique </label>
						<input type = "text" name = "rechercheart" class = "rechercheart">
					</div>
					<div class = "conteneur_label">
						<label for = "honor" class = "label_honor">Distinction honorifique</label>
						<input type = "text" name = "honor" class = "honor">
					</div>
				</div>
				
				
				<table>
					<tr>
						<th>Art visuelle</th>
						<th>Art musicaux</th>
						<th>Art de la scène </th>
					</tr>
					<tr>
						<td>
							<input type = "checkbox" value = "plastique" name = "c_plastique">Art plastique </input><br>
							<input type = "checkbox" value = "culture" name = "c_culture">Culture</input><br>
							<input type = "checkbox" value = "dessin" name = "c_dessin">Dessin(Grafiti, Bande dessinée)</input><br>
							<input type = "checkbox" value = "peinture" name = "c_peinture">Peinture</input><br>
							<input type = "checkbox" value = "photographie" name = "c_photographie">Photographie</input><br>
							<input type = "checkbox" value = "stylisme" name = "c_stylisme">Stylisme</input><br>
							<input type = "checkbox" value = "numerique" name = "c_numerique">Art numérique (jeu vidéo, web design)</input><br>
						</td>
						<td>
							<input type = "checkbox" value = "musique" name = "c_musique">musique</input><br>
							<input type = "checkbox" value = "djing" name = "c_djing">Djing</input><br>
							<input type = "checkbox" value = "son" name = "c_son">Ingénierie de son</input><br>
						</td>
						<td>
							<input type = "checkbox" value = "theatre" name = "c_theatre">Théatre</input><br>
							<input type = "checkbox" value = "danse" name = "c_danse">danse</input><br>
							<input type = "checkbox" value = "mime" name = "c_mime">Mime</input><br>
							<input type = "checkbox" value = "oratoire" name = "c_oratoire">Art oratoire</input><br>
							<input type = "checkbox" value = "humour" name = "c_humour">Humour</input><br>
							<input type = "checkbox" value = "cirque" name = "c_cirque">cirque</input><br>
						</td>
					</tr>
				</table>

		
			</fieldset> 
		</form>
		<?php 
		if(isset($_POST["rechercher"]))
		{
			
			if(isset($_POST["c_plastique"]))
			{
				echo $_POST["c_plastique"]."<br>";
			}
			if(isset($_POST["c_culture"]))
			{
				echo $_POST["c_culture"]."<br>";
			}
			echo $_POST["rechercheglobal"];
		}
			
		?>

</body>
</html>