<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8">
	<title>formulaire de remplissage</title>
	<link rel="stylesheet" type="text/css" href="formul_suppr_modif_affich.css">
</head>
<body>
	<form method = "post" action = "" enctype = "multipart/form-data">
		
		<div class="gauche">
			<div class  ="image">
				<input type = "file" name ="photo" class  ="photo" >
			</div>
			<div class = "distinction_honorifique">
				<div class="conteneurtitre">
					<label class = "titrebleusouligne">Distinction honorifique</label><br><br><br>
				</div>
				<div class="ON">
					
				<div class="conteneurtitre">
						<label class = "couleurrouge">Ordre Nationale</label><br><br><br>
				</div>
				
				<table class = "table_une_ligne">
					<tr>
						<th>Désignation</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><input type ="text" name = "designationordre" class ="ordrenat"></td>
						<td><input type  = "text" name = "dateordre" class = "ordrenat" ></td>
					</tr>
				</table>
				</div>
				
				<div class="conteneurtitre">
					<label class = "couleurrouge"> OALC </label>	
				</div>
				<table class = "table_une_ligne">
					<tr>
						<th>Désignation</th>
						<th>Date</th>
					</tr>		
					<tr>
						<td><input type = "text" name = "designationoalc" class = "oalc"></td>
						<td><input type = "text" name = "dateoalc" class = "oalc"></td>
					</tr>		
				</table>
			
			</div>
			<div class =" mise_jour">
				<div class="conteneurtitre">
					<label class = "titrebleusouligne" >dernière mise à jour</label><br><br><br>
				</div>	
				<table class = "table_une_ligne">
					<tr>
						<th>Désignation</th>
						<th>Date</th>
					</tr>
					<tr>
						<td><input type = "text" name = "designationmisejour" class = "oalc"></td>
						<td><input type = "text" name = "datemisejour" class = "oalc"></td>
					</tr>
				</table>
			</div>	
		</div>
		
		<div class = "droite">
			<label>Nom et prénoms : </label><input type = "text" name = "nom" class = "nom"><br>
			<label>Nom d'artiste : </label><input type = "text" name = "pseudo" class = "pseudo" ><br>
			<label>Groupe :</label><input type = "text" name = "groupe" class = "groupe" ><br>
			<label>Discipline artistique : </label><input type = "text" name = "discipline" class = "discipline" ><br>
			<label>Instrument :</label><input type = "text" name = "intrument" class = "instrument" ><br>
			<label>Adresse : </label><input type = "text" name = "adresse" class = "adresse"><br>
			<label>Contact : </label><input type = "text" name = "contact" class = "contact"><br>
			<label>Résaux sociaux : </label><input type = "text" name = "reseausociaux" class = "reseausociaux"><br>
			<label>site web :</label><input type = "text" name = "siteweb" class = "siteweb" ><br>
			<br><br>
			<label class ="black">Formation:</label><br><br>
			<table border = "2" width = "200px" height = "80px">
				<tr>
					<th>Année </th>
					<th>Ecole</th>
					<th>Genre/Titre</th>
					<th>Diplôme/certificat</th>
				</tr>
				<tr>
					<td><input type ="text" name = "anneformation"></td>
					<td><input type = "text" name = "ecoleformation"></td>
					<td><input type = "text" name = "genreformation"></td>
					<td><input type = "text" name = "diplomeformation"></td>
				</tr>
			</table>
			<label>Année de début d'activité : </label><input type = "text" name = "anneactivite" class = "anneactivite"><br><br><br>
			<label class ="black">Production(s) :</label><br><br>
			<table border = "2" width = "200px" height = "80px">	
				<tr>
					<th>Titre</th>
					<th>Année</th>
					<th>Production</th>
				</tr>
				<tr>
					<td><input type = "text" name = "titreproduction"></td>
					<td><input type = "text" name = "anneproduction"></td>
					<td><input type = "text" name = "production"></td>
				</tr>
			</table>
			<br><br><br>
			<label class ="black">Grande(s) réalisation(s) :</label><br><br>
			<table border = "2" width = "200px" height = "80px">	
				<tr>
					<th>Titre</th>
					<th>Année</th>
					<th>Lieu</th>
				</tr>
				<tr>
					<td><input type = "text" name = "titrerealisation"></td>
					<td><input type = "text" name = "annerealisation"></td>
					<td><input type = "text" name = "lieu"></td>
				</tr>
			</table>
			<br><br>
			<label class ="black">Participation aux rencontres/festivals (nationaux et internationaux) :</label><input type = "text" name = "participation" class = "participation"><br><br>
			<label class ="black">Grande(s) Affiliation à l'OMDA :</label><input type = "text" name = "affiliation" class = "affiliation" ><br><br>
			<label class ="black">Producteur :</label><input type = "text" name = "producteur" class = "producteur"><br><br>
			<label class ="black"> Tourneur : </label><input type = "text" name = "tourneur" class = "tourneur"><br><br>
		</div>
		<br><br><br>
		<input type  = "submit" name = "modif_formul" value = "modifier" class = "modif_submit"> 
		<input type  = "submit" name = "impr_formul" value = "imprimer" class = "impr_submit"> 
		<input type  = "submit" name = "supr_formul" value = "supprimer" class = "supr_submit"> 
		<a href="formul_pdf.php" >imprimer</a>
	</form>
</body>
</html>