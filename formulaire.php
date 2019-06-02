<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8">
	<title>formulaire de remplissage</title>
	<link rel="stylesheet" type="text/css" href="formul_rempl.css">
</head>
<body>
	<?php 
		include('nav.php');
	 ?>
	<form method="POST" action="recup_formulaire.php" enctype = "multipart/form-data">
		
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
					<label class = "titrebleusouligne" >Membres</label><br><br><br>
				</div>	
				<center>
				<table class = "table_une_ligne">
					<tr>
						<th>Bassiste</th>
						<th><input type = "text" name = "bassiste"></th>
					</tr>
					<tr>
						<th>Solliste</th>
						<td><input type = "text" name = "solliste"></td>
					</tr>
					<tr>
						<th>Clavieriste</th>
						<td><input type = "text" name = "clavieriste"></td>
					</tr>
					<tr>
						<th>Batteur</th>
						<td><input type = "text" name = "batteur"></td>
					</tr>
					<tr>
						<th>Coeurs</th>
						<td><input type = "text" name = "coeurs"></td>
					</tr>
					<tr>
						<th>Danseurs</th>
						<td><input type = "text" name = "danseurs"></td>
					</tr>
				</table>
				</center>
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
			<label>Numeros Uniques : </label><input type = "text" name = "numerounique" class = "numerounique" style="width : 75%; border-style : none; border-bottom : 1px black dotted;"><br>

			<label>Managère : </label><input type = "text" name = "managere" class = "managere" style="width : 83%; border-style : none; border-bottom : 1px black dotted;"><br>
			<label>Groupe :</label><input type = "text" name = "groupe" class = "groupe" ><br>
			<label>Discipline artistique : </label><input type = "text" name = "discipline" class = "discipline" ><br>
			<label>Instrument :</label><input type = "text" name = "instrument" class = "instrument" ><br>
			<label>Adresse : </label><input type = "text" name = "adresse" class = "adresse"><br>
			<label>Contact : </label><input type = "text" name = "contact" class = "contact"><br>
			<label>Résaux sociaux : </label><input type = "text" name = "reseauxsociaux" class = "reseausociaux"><br>
			<label>site web :</label><input type = "text" name = "siteweb" class = "siteweb" ><br><br>
			<div>
		<label>Type de la music :</label> 
          <select name="typemusic" id="typemusic" style=" margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          <option selected="selected"> </option>
                <option>Batrielaka</option>
                <option>Salegy</option>
                <option>Tsapiky</option>
                <option>Kilalaky</option>
            	<option>RNB</option>
                <option>RAP</option>
                <option>Malesa</option>
                <option>Roots</option>
                <option>Rock</option>
                <option>Metaly</option>
                <option>Pop Rock</option>
                <option>Varieté</option>
                <option>Regaie</option>
                <option>Sega</option>
                <option>Dombolo</option>
                <option>Azonto</option>
                <option>Kaoitry</option>
                <option>coupé decalé</option>         
                <option>Autre</option> 
            </select>
  </div>

		<div>
		<label>Art visuelle :</label> 
          <select name="artvisuelle" id="artvisuelle" style=" margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          		<option selected="selected"> </option>
                <option>Art plastique</option>
                <option>Culture</option>
                <option>Dessin(Grafiti, Bande dessinée)</option>
                <option>Peinture</option>
            	<option>Photographie</option>
                <option>Stylisme</option>
                <option>Art numérique (jeu vidéo, web design)</option>          
            </select>
  </div>


  <div>
      <label>Art musicaux :</label> 
          <select name="artmusicaux" id="artmusicaux" style="margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          <option selected="selected"> </option>
                <option>musique</option>
                <option>Djing</option>
                <option>Ingénierie de son</option>        
            </select>
  </div>


    <div>
      <label>Art de la scène :</label> 
          <select name="artscene" id="artscene" style="margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          <option selected="selected"> </option>
                <option>Théatre</option>
                <option>danse</option>
                <option>Mime</option>
                <option>Art oratoire</option>
            <option>Humour</option>
                <option>cirque</option>         
            </select>
  </div>	
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
			<label>Année de début d'activité : </label>
			<input type = "text" name = "anneactivite" class = "anneactivite"><br><br><br>
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
			<label class ="black">Participation aux rencontres/festivals (nationaux et internationaux) :</label>
			<input type = "text" name = "participation" class = "participation"><br><br>
			<label class ="black">Grande(s) Affiliation à l'OMDA :</label>
			<input type = "text" name = "affiliation" class = "affiliation" ><br><br>
			<label class ="black">Producteur :</label>
			<input type = "text" name = "producteur" class = "producteur"><br><br>
			<label class ="black"> Tourneur : </label>
			<input type = "text" name = "tourneur" class = "tourneur"><br><br>
		</div>
		<br>
		<br>
		<br>
		<input type  = "submit" name = "submit_formulaire" value = "enregistrer" class = "enr_submit"> 
	</form>
</body>
</html>