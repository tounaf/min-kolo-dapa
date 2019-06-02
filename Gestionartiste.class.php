<?php 
class Gestionartiste
{
	private $db;

	public function __construct(PDO $data)
	{
		$this->db = $data;
	}
	
	public function insertartiste(Artiste $artiste)
	{
		$requete = $this->db->prepare('INSERT INTO artistes SET
			designationordre=:designationordre,
			dateordre=:dateordre,
			designationoalc=:designationoalc,
			dateoalc=:dateoalc,
			bassiste=:bassiste,
			solliste=:solliste,
			clavieriste=:clavieriste,
			batteur=:batteur,
			coeurs=:coeurs,
			danseur=:danseurs,
			designationmisejour=:designationmisejour,
			datemisejour=:datemisejour,
			nom=:nom,
			pseudo=:pseudo,
			numerounique=:numerounique,
			managere=:managere,
			groupe=:groupe,
			discipline=:discipline,
			instrument=:instrument,
			adresse=:adresse,
			contact=:contact,
			reseauxsociaux=:reseauxsociaux,
			siteweb=:siteweb,
			typemusic=:typemusic,
			artvisuelle=:artvisuelle,
			artmusicaux=:artmusicaux,
			artscene=:artscene,
			anneformation=:anneformation,
			ecoleformation=:ecoleformation,
			genreformation=:genreformation,
			diplomeformation=:diplomeformation,
			anneactivite=:anneactivite,
			titreproduction=:titreproduction,
			anneproduction=:anneproduction,
			production=:production,
			titrerealisation=:titrerealisation,
			annerealisation=:annerealisation,
			lieu=:lieu,
			participation=:participation,
			affiliation=:affiliation,
			producteur=:producteur,
			tourneur=:tourneur,
			photo=:photo');
		$requete->bindValue(':designationordre', utf8_decode($artiste->getdesignationordre()));
		$requete->bindValue(':dateordre', utf8_decode($artiste->getdateordre()));
		$requete->bindValue(':designationoalc', utf8_decode($artiste->getdesignationoalc()));
		$requete->bindValue(':dateoalc', utf8_decode($artiste->getdateoalc()));
		$requete->bindValue(':bassiste', utf8_decode($artiste->getbassiste()));
		$requete->bindValue(':solliste', utf8_decode($artiste->getsolliste()));
		$requete->bindValue(':clavieriste', utf8_decode($artiste->getclavieriste()));
		$requete->bindValue(':batteur', utf8_decode($artiste->getbatteur()));
		$requete->bindValue(':coeurs', utf8_decode($artiste->getcoeurs()));
		$requete->bindValue(':danseurs', utf8_decode($artiste->getdanseurs()));
		$requete->bindValue(':designationmisejour', utf8_decode($artiste->getdesignationmisejour()));
		$requete->bindValue(':datemisejour', utf8_decode($artiste->getdatemisejour()));
		$requete->bindValue(':nom', utf8_decode($artiste->getnom()));
		$requete->bindValue(':pseudo', utf8_decode($artiste->getpseudo()));
		$requete->bindValue(':numerounique', utf8_decode($artiste->getnumerounique()));
		$requete->bindValue(':managere', utf8_decode($artiste->getmanagere()));
		$requete->bindValue(':groupe', utf8_decode($artiste->getgroupe()));
		$requete->bindValue(':discipline', utf8_decode($artiste->getdiscipline()));
		$requete->bindValue(':instrument', utf8_decode($artiste->getinstrument()));
		$requete->bindValue(':adresse', utf8_decode($artiste->getadresse()));
		$requete->bindValue(':contact', utf8_decode($artiste->getcontact()));
		$requete->bindValue(':reseauxsociaux', utf8_decode($artiste->getreseauxsociaux()));
		$requete->bindValue(':siteweb', utf8_decode($artiste->getsiteweb()));
		$requete->bindValue(':typemusic', utf8_decode($artiste->gettypemusic()));
		$requete->bindValue(':artvisuelle', utf8_decode($artiste->getartvisuelle()));
		$requete->bindValue(':artmusicaux', utf8_decode($artiste->getartmusicaux()));
		$requete->bindValue(':artscene', utf8_decode($artiste->getartscene()));
		$requete->bindValue(':anneformation', utf8_decode($artiste->getanneformation()));
		$requete->bindValue(':ecoleformation', utf8_decode($artiste->getecoleformation()));
		$requete->bindValue(':genreformation', utf8_decode($artiste->getgenreformation()));
		$requete->bindValue(':diplomeformation', utf8_decode($artiste->getdiplomeformation()));
		$requete->bindValue(':anneactivite', utf8_decode($artiste->getanneactivite()));
		$requete->bindValue(':titreproduction', utf8_decode($artiste->gettitreproduction()));
		$requete->bindValue(':anneproduction', utf8_decode($artiste->getanneproduction()));
		$requete->bindValue(':production', utf8_decode($artiste->getproduction()));
		$requete->bindValue(':titrerealisation', utf8_decode($artiste->gettitrerealisation()));
		$requete->bindValue(':annerealisation', utf8_decode($artiste->getannerealisation()));
		$requete->bindValue(':lieu', utf8_decode($artiste->getlieu()));
		$requete->bindValue(':participation', utf8_decode($artiste->getparticipation()));
		$requete->bindValue(':affiliation', utf8_decode($artiste->getaffiliation()));
		$requete->bindValue(':producteur', utf8_decode($artiste->getproducteur()));
		$requete->bindValue(':tourneur', utf8_decode($artiste->gettourneur()));
		$requete->bindValue(':photo', utf8_decode($artiste->getphoto()));
		$requete->execute();
	}
}
 ?>