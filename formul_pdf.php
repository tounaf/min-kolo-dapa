<?php 

	//sortie pdf pour l'utilisateur
	include("fpdf.php");
	//creer un nouveau document pdf
	class PDF extendS FPDF 
	{
		function Header()//mametraka en tête
		{
			//Logo
			//$this->Image('logo.png',10,6,30);
			//Police Arial gras 15
			$this->SetFont('Arial','B',12);
			//Décalage à droite
			$this->Cell(70);
			//Titre
			$this->Cell(50,20,utf8_decode('Logo gouvernementale'),1,0,'c');
			//saut de ligne
			$this->Ln(20);
		}
		function EnTete(){
			$this->Cell(32);
			$this->Cell(40,7,utf8_decode('LE GOUVERNEMENT'));
			//$this->Cell(80,7,utf8_decode('Titre'),1,0,'L',0);
			
		}

		function mcc()
		{
			$this->cell(39);
			$this->Cell(25, 25, 'logo mcc',1,0,'c');
		}

		function min_com()
		{

			$this->Cell(40, 7, utf8_decode('MINISTERE DE LA COMMUNICATION ET DE LA'));
			$this->Ln(5);
			$this->Cell(40);
			$this->Cell(40,7, utf8_decode('CULTURE'));
		}
		function secGen()
		{
			$this->Cell(30);
			$this->Cell(40, 7, utf8_decode('SECRETERIAT GENERAL'));
		}

		function dirGen()
		{
			$this->Cell(10);
			$this->Cell(40, 7, utf8_decode('DIRECTION GENERALE DE LA CULTURE'));

		}
		function souligner_pointille()
		{
		
			$this->Cell(10,12,'--------------');
		}
		
		function dirArt()
		{
			$this->Cell(6);
			$this->Cell(40, 7, utf8_decode('DIRECTION DES ARTS ET DE LA PROMOTION'));
			$this->Ln(5);
			$this->Cell(38);
			$this->Cell(40, 7, utf8_decode('ARTISTIQUE'));
		}

		function numero($number)
		{
			$longueur = strlen($number);
			while ($longueur<4)
			{
				$number = '0'.$number;
				$longueur = strlen($number);
			}
			$this->Cell(22);
			$this->Cell(40, 7, utf8_decode('N° '. $number . '/19/MCC/SG/DGC/DAPA'));
		}

		function attestation()
		{
			$this->Ln(7);
			$this->Cell(70);
			$this->SetFont('Times','BU', 16);
			$this->Cell(40, 7, utf8_decode('ATTESTATION'));
			$this->SetFont('Times', '', 12);
		}

		function premierligne()
		{
			$this->SetFont('Times', '', 14);
			$this->Cell(30);
			$this->Cell(50,7, utf8_decode('Nous, soussignée, Direction des Arts et de la Promotion Artistique, attestons'));
		}

		function deuxiemeligne($groupe)
		{
			$this->SetFont('Times', '', 14);
			$this->Cell(18);
			$this->Cell(50, 7, utf8_decode("par la présence que l'artiste ci-après du groupe ". $groupe. " :"));
		}
		function identifiant()
		{
			//les identifiant de la personne
		}

		function quatriemeligne()
		{
			$this->Cell(18);
			$this->SetFont('Times','', 14);
			$this->Cell(50, 7, utf8_decode("est enregistré dans les archives de la Direction, ce musicien exerce bel et bien ce"));
		}

		function cinquemeligne()
		{
			$this->Cell(18);
			$this->SetFont('Times', '', 14);
			$this->Cell(50, 7, utf8_decode("métier"));
		}
		function sixiemeligne()
		{
			$this->Cell(18);
			$this->SetFont('Times','', 14);
			$this->Cell(50, 7, utf8_decode("En foi de quoi, la présente attestation lui est délivrée pour servir et valoir ce que de"));
		}

		function septiemeligne()
		{
			$this->Cell(18);
			$this->SetFont('Times', '', 14);
			$this->Cell(50, 7, utf8_decode("droit"));
		}
		function huitiemeligne()
		{
			
			$this->SetFont('Times','', 14);
			$this->Cell(130);
			$this->Cell(50, 7, utf8_decode("Antananarivo le,"));
		}
		//pied de page
		function Footer()
		{
			//positionnement à 1,5 cm du bas
			//$this->SetY(-15);
			//Poslice Arial italique 8
			//$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
			//$this->cell(75);
			//$this->Cell(50, 7, utf8_decode("Antananarivo le,"));
		}
	}

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Ln(5);
	$pdf->SetFont('Times','',10);
	$pdf->Ln(5);
	$pdf->SetTextColor(0,0,0);
	$pdf->EnTete();
	$pdf->Ln(7);
	$pdf->mcc();
	$pdf->Ln(24);
	$pdf->min_com();
	$pdf->setXY(50,78);
	$pdf->souligner_pointille();
	$pdf->Ln(7);
	$pdf->secGen();
	$pdf->setXY(50,88);
	$pdf->souligner_pointille();
	$pdf->Ln(7);
	$pdf->dirGen();
	$pdf->setXY(50,98);
	$pdf->souligner_pointille();
	$pdf->Ln(7);
	$pdf->dirArt();
	$pdf->setXY(50, 112);
	$pdf->souligner_pointille();
	$pdf->Ln(7);
	$pdf->numero(14);
	$pdf->Ln(10);
	$pdf->attestation();
	$pdf->Ln(9);
	$pdf->premierligne();
	$pdf->Ln(8);
	$pdf->deuxiemeligne('Tarika Tarika');
	$pdf->Ln(40);
	$pdf->quatriemeligne();
	$pdf->Ln(8);
	$pdf->cinquemeligne();
	$pdf->Ln(9);
	$pdf->sixiemeligne();
	$pdf->Ln(9);
	$pdf->septiemeligne();
	$pdf->Ln(10);
	$pdf->huitiemeligne();


	$pdf->Output();


?>