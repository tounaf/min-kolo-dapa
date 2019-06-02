<!DOCTYPE HTML>
<?php 
	if(isset($_FILES["photo"]["name"]))
	{
		$_POST["photo"]  = $_FILES["photo"]["name"];
		$tmp = $_FILES["photo"]["tmp_name"];
		move_uploaded_file($tmp, "image/".$_POST["photo"]);
	
	}

 ?>
<html>
<head>
	<meta charset = "utf-8">
	<title>formulaire de remplissage</title>
	<link rel="stylesheet" type="text/css" href="formul_rempl.css">
</head>
<body>
	<nav>
			<ul>
				<li> <a href="index.php">page de recherche</a> </li>
				<li> <a href="formulaire.php">page de remplissage formulaire </a> </li>
				<li> <a href="">autre option</a> </li>
			</ul>
		</nav>
	<form method="POST" action="controleur_formulaire.php" enctype = "multipart/form-data">
		
		<div class="gauche">
			<div class  ="image">
				<input type = "hidden" name ="photo" value = "image/<?php echo $_POST['photo']; ?>" class ="photo" ><br>
				<img src="image/<?php echo $_POST['photo']; ?>" width = "75px" heigth = "50px">
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
						<td><input type ="text" name = "designationordre" value="<?php echo $_POST['designationordre']; ?> " class ="ordrenat"></td>
						<td><input type  = "text" name = "dateordre" value="<?php echo $_POST['dateordre']; ?> " class = "ordrenat" ></td>
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
						<td><input type = "text" name = "designationoalc" value="<?php echo $_POST['designationoalc']; ?> " class = "oalc"></td>
						<td><input type = "text" name = "dateoalc" value="<?php echo $_POST['dateoalc']; ?> " class = "oalc"></td>
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
						<th><input type = "text" name = "bassiste" value="<?php echo $_POST['bassiste']; ?> "></th>
					</tr>
					<tr>
						<th>Solliste</th>
						<td><input type = "text" name = "solliste" value="<?php echo $_POST['solliste']; ?> "></td>
					</tr>
					<tr>
						<th>Clavieriste</th>
						<td><input type = "text" name = "clavieriste" value="<?php echo $_POST['clavieriste']; ?> " ></td>
					</tr>
					<tr>
						<th>Batteur</th>
						<td><input type = "text" name = "batteur" value="<?php echo $_POST['batteur']; ?> "></td>
					</tr>
					<tr>
						<th>Coeurs</th>
						<td><input type = "text" name = "coeurs" value="<?php echo $_POST['coeurs']; ?> " ></td>
					</tr>
					<tr>
						<th>Danseurs</th>
						<td><input type = "text" name = "danseurs" value="<?php echo $_POST['danseurs']; ?> " ></td>
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
						<td><input type = "text" name = "designationmisejour" class = "oalc" value="<?php echo $_POST['designationmisejour']; ?> " ></td>
						<td><input type = "text" name = "datemisejour" class = "oalc" value="<?php echo $_POST['datemisejour']; ?> " ></td>
					</tr>
				</table>
			</div>	


		</div>
		
		<div class = "droite">
			<label>Nom et prénoms : </label><input type = "text" name = "nom" class = "nom" value="<?php echo $_POST['nom']; ?> " ><br>
			<label>Nom d'artiste : </label><input type = "text" name = "pseudo" class = "pseudo" value="<?php echo $_POST['pseudo']; ?> " ><br>
			<label>Numeros Uniques : </label><input type = "text" name = "numerounique" class = "numerounique" value="<?php echo $_POST['numerounique']; ?> " style="width : 75%; border-style : none; border-bottom : 1px black dotted;"><br>

			<label>Managère : </label><input type = "text" name = "managere" class = "managere" value="<?php echo $_POST['managere']; ?> " style="width : 83%; border-style : none; border-bottom : 1px black dotted;"><br>
			<label>Groupe :</label><input type = "text" name = "groupe" class = "groupe" value="<?php echo $_POST['groupe']; ?> " ><br>
			<label>Discipline artistique : </label><input type = "text" name = "discipline" class = "discipline" value="<?php echo $_POST['discipline']; ?> " ><br>
			<label>Instrument :</label><input type = "text" name = "instrument" class = "instrument" value="<?php echo $_POST['instrument']; ?> " ><br>
			<label>Adresse : </label><input type = "text" name = "adresse" class = "adresse" value="<?php echo $_POST['adresse']; ?> " ><br>
			<label>Contact : </label><input type = "text" name = "contact" class = "contact" value="<?php echo $_POST['contact']; ?> " ><br>
			<label>Résaux sociaux : </label><input type = "text" name = "reseauxsociaux" class = "reseausociaux" value="<?php echo $_POST['reseauxsociaux']; ?> " ><br>
			<label>site web :</label><input type = "text" name = "siteweb" class = "siteweb" value="<?php echo $_POST['siteweb']; ?> " ><br><br>
			<div>
  	<label>Type de la music :</label> 
          <select name="typemusic" id="typemusic" style=" margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          <option selected="selected"> <?php echo $_POST['typemusic']; ?>  </option>
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
          		<option selected="selected"><?php echo $_POST['artvisuelle']; ?> </option>
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
          <option selected="selected"> <?php echo $_POST['artmusicaux']; ?>  </option>
                <option>musique</option>
                <option>Djing</option>
                <option>Ingénierie de son</option>        
            </select>
  </div>


    <div>
      <label>Art de la scène :</label> 
          <select name="artscene" id="artscene" style="margin-left:20px; border-style : none; border-bottom : 1px black dotted;">
          <option selected="selected"> <?php echo $_POST['artscene']; ?> </option>
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
					<td><input type ="text" name = "anneformation" value="<?php echo $_POST['anneformation']; ?> " ></td>
					<td><input type = "text" name = "ecoleformation" value="<?php echo $_POST['ecoleformation']; ?> " ></td>
					<td><input type = "text" name = "genreformation" value="<?php echo $_POST['genreformation']; ?> " ></td>
					<td><input type = "text" name = "diplomeformation" value="<?php echo $_POST['diplomeformation']; ?> " ></td>
				</tr>
			</table>
			<label>Année de début d'activité : </label>
			<input type = "text" name = "anneactivite" class = "anneactivite" value="<?php echo $_POST['anneactivite']; ?> " ><br><br><br>
			<label class ="black">Production(s) :</label><br><br>
			<table border = "2" width = "200px" height = "80px">	
				<tr>
					<th>Titre</th>
					<th>Année</th>
					<th>Production</th>
				</tr>
				<tr>
					<td><input type = "text" name = "titreproduction" value="<?php echo $_POST['titreproduction']; ?> " ></td>
					<td><input type = "text" name = "anneproduction" value="<?php echo $_POST['anneproduction']; ?> " ></td>
					<td><input type = "text" name = "production" value="<?php echo $_POST['production']; ?> " ></td>
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
					<td><input type = "text" name = "titrerealisation" value="<?php echo $_POST['production']; ?> " ></td>
					<td><input type = "text" name = "annerealisation" value="<?php echo $_POST['annerealisation']; ?> " ></td>
					<td><input type = "text" name = "lieu" value="<?php echo $_POST['lieu']; ?> " ></td>
				</tr>
			</table>
			<br><br>
			<label class ="black">Participation aux rencontres/festivals (nationaux et internationaux) :</label>
			<input type = "text" name = "participation" class = "participation" value="<?php echo $_POST['participation']; ?> " ><br><br>
			<label class ="black">Grande(s) Affiliation à l'OMDA :</label>
			<input type = "text" name = "affiliation" class = "affiliation" value="<?php echo $_POST['affiliation']; ?> " ><br><br>
			<label class ="black">Producteur :</label>
			<input type = "text" name = "producteur" class = "producteur" value="<?php echo $_POST['producteur']; ?> " ><br><br>
			<label class ="black"> Tourneur : </label>
			<input type = "text" name = "tourneur" class = "tourneur" value="<?php echo $_POST['tourneur']; ?> " ><br><br>
		</div>
		<br>
		<br>
		<br>
		<input type  = "submit" name = "submit_formulaire" value = "enregistrer" class = "enr_submit"> 
	</form>
</body>
</html>