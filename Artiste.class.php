<?php 
class Artiste
{
	private $id;
	private $designationordre;
	private $dateordre;
	private $designationoalc;
	private $dateoalc;
	private $bassiste;
	private $solliste;
	private $clavieriste;
	private $batteur;
	private $coeurs;
	private $danseurs;
	private $designationmisejour;
	private $datemisejour;
	private $nom;
	private $pseudo;
	private $numerounique;
	private $managere;
	private $groupe;
	private $discipline;
	private $instrument;
	private $adresse;
	private $contact;
	private $reseauxsociaux;
	private $siteweb;
	private $typemusic;
	private $artvisuelle;
	private $artmusicaux;
	private $artscene;
	private $anneformation;
	private $ecoleformation;
	private $genreformation;
	private $diplomeformation;
	private $anneactivite;
	private $titreproduction;
	private $anneproduction;
	private $production;
	private $titrerealisation;
	private $annerealisation;
	private $lieu;
	private $participation;
	private $affiliation;
	private $producteur;
	private $tourneur;
	private $photo;

	public function __construct($tableau = array())
	{
		if(isset($tableau))
		{
			$this->hydrate($tableau);
		}
	}

	private function hydrate(array $tableau)
	{
		foreach($tableau as $indice  => $valeur)
		{
			$method = 'set'.$indice;
			if(is_callable(array($this,$method)))
			{
				$this->$method($valeur);
			}
		}
	}
//getter
	public function getid()
	{
		return $this->id;
	}
	public function getdesignationordre()
	{
		return $this->designationordre;
	}
	public function getdateordre()
	{
		return $this->dateordre;
	}
	public function getdesignationoalc()
	{
		return $this->designationoalc;
	}
	public function getdateoalc()
	{
		return $this->dateoalc;
	}
	public function getbassiste()
	{
		return $this->bassiste;
	}

	public function getsolliste()
	{
		return $this->solliste;
	}
	public function getclavieriste()
	{
		return $this->clavieriste;
	}
	public function getbatteur()
	{
		return $this->batteur;
	}
	public function getcoeurs()
	{
		return $this->coeurs;
	}
	public function getdanseurs()
	{
		return $this->danseurs;
	}
	public function getdesignationmisejour()
	{
		return $this->designationmisejour;
	}
	public function getdatemisejour()
	{
		return $this->datemisejour;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getpseudo()
	{
		return $this->pseudo;
	}
	public function getnumerounique()
	{
		return $this->numerounique;
	}
	public function getmanagere()
	{
		return $this->managere;
	}
	public function getgroupe()
	{
		return $this->groupe;
	}
	public function getdiscipline()
	{
		return $this->discipline;
	}
	public function getinstrument()
	{
		return $this->instrument;
	}
	public function getadresse()
	{
		return $this->adresse;
	}
	public function getcontact()
	{
		return $this->contact;
	}
	public function getreseauxsociaux()
	{
		return $this->reseauxsociaux;
	}
	public function getsiteweb()
	{
		return $this->siteweb;
	}
	public function gettypemusic()
	{
		return $this->typemusic;
	}
	public function getartvisuelle()
	{
		return $this->artvisuelle;
	}
	public function getartmusicaux()
	{
		return $this->artmusicaux;
	}
	public function getartscene()
	{
		return $this->artscene;
	}
	public function getanneformation()
	{
		return $this->anneformation;
	}
	public function getecoleformation()
	{
		return $this->ecoleformation;
	}
	public function getgenreformation()
	{
		return $this->genreformation;
	}
	public function getdiplomeformation()
	{
		return $this->diplomeformation;
	}
	public function getanneactivite()
	{
		return $this->anneactivite;
	}
	public function gettitreproduction()
	{
		return $this->titreproduction;
	}
	public function getanneproduction()
	{
		return $this->anneproduction;
	}
	public function getproduction()
	{
		return $this->production;
	}
	public function gettitrerealisation()
	{
		return $this->titrerealisation;
	}
	public function getannerealisation()
	{
		return $this->annerealisation;
	}
	public function getlieu()
	{
		return $this->lieu;
	}
	public function getparticipation()
	{
		return $this->participation;
	}
	public function getaffiliation()
	{
		return $this->affiliation;
	}
	public function getproducteur()
	{
		return $this->producteur;
	}
	public function gettourneur()
	{
		return $this->tourneur;
	}
	public function getphoto()
	{
		return $this->photo;
	}


//setters
	public function setid($id)
	{
		$this->id = $id;
	}
	public function setdesignationordre($design)
	{
		$this->designationordre = $design;
	}
	public function setdateordre($dateordre)
	{
		$this->dateordre = $dateordre;
	}
	public function setdesignationoalc($designationoalc)
	{
		$this->designationoalc = $designationoalc;
	}
	public function setdateoalc($dateoalc)
	{
		$this->dateoalc = $dateoalc;
	}
	public function setbassiste($bassiste)
	{
		$this->bassiste = $bassiste;
	}

	public function setsolliste($solliste)
	{
		$this->solliste = $solliste;
	}
	public function setclavieriste($clavieriste)
	{
		$this->clavieriste = $clavieriste;
	}
	public function setbatteur($batteur)
	{
		$this->batteur = $batteur;
	}
	public function setcoeurs($coeurs)
	{
		$this->coeurs = $coeurs;
	}
	public function setdanseurs($danseurs)
	{
		$this->danseurs = $danseurs;
	}
	public function setdesignationmisejour($designationmisejour)
	{
		$this->designationmisejour = $designationmisejour;
	}
	public function setdatemisejour($datemisejour)
	{
		$this->datemisejour = $datemisejour;
	}
	public function setnom($nom)
	{
		$this->nom = $nom;
	}
	public function setpseudo($pseudo)
	{
		$this->pseudo = $pseudo;
	}
	public function setnumerounique($numerounique)
	{
		$this->numerounique = $numerounique;
	}
	public function setmanagere($managere)
	{
		$this->managere = $managere;
	}
	public function setgroupe($groupe)
	{
		$this->groupe = $groupe;
	}
	public function setdiscipline($discipline)
	{
		$this->discipline = $discipline;
	}
	public function setinstrument($instrument)
	{
		$this->instrument = $instrument;
	}
	public function setadresse($adresse)
	{
		$this->adresse = $adresse;
	}
	public function setcontact($contact)
	{
		$this->contact = $contact;
	}
	public function setreseauxsociaux($reseau)
	{
		$this->reseauxsociaux = $reseau;
	}
	public function setsiteweb($siteweb)
	{
		$this->siteweb = $siteweb;
	}
	public function settypemusic($typemusic)
	{
		$this->typemusic = $typemusic;
	}
	public function setartvisuelle($artvisuelle)
	{
		$this->artvisuelle = $artvisuelle;
	}
	public function setartmusicaux($artmusicaux)
	{
		$this->artmusicaux = $artmusicaux;
	}
	public function setartscene($artscene)
	{
		$this->artscene = $artscene;
	}
	public function setanneformation($anneformation)
	{
		$this->anneformation = $anneformation;
	}
	public function setecoleformation($ecoleformation)
	{
		$this->ecoleformation = $ecoleformation;
	}
	public function setgenreformation($genreformation)
	{
		$this->genreformation = $genreformation;
	}
	public function setdiplomeformation($diplomeformation)
	{
		$this->diplomeformation = $diplomeformation;
	}
	public function setanneactivite($anneeactivite)
	{
		$this->anneactivite = $anneeactivite;
	}
	public function settitreproduction($titreproduction)
	{
		$this->titreproduction = $titreproduction;
	}
	public function setanneproduction($anneproduction)
	{
		$this->anneproduction = $anneproduction;
	}
	public function setproduction($production)
	{
		$this->production = $production;
	}
	public function settitrerealisation($titrerealisation)
	{
		$this->titrerealisation = $titrerealisation;
	}
	public function setannerealisation($annerealisation)
	{
		$this->annerealisation = $annerealisation;
	}
	public function setlieu($lieu)
	{
		$this->lieu = $lieu;
	}
	public function setparticipation($participation)
	{
		$this->participation = $participation;
	}
	public function setaffiliation($affiliation)
	{
		$this->affiliation = $affiliation;
	}
	public function setproducteur($producteur)
	{
		$this->producteur = $producteur;
	}
	public function settourneur($tourneur)
	{
		$this->tourneur = $tourneur;
	}
	public function setphoto($photo)
	{
		$this->photo = $photo;
	}
	
}

 ?>
