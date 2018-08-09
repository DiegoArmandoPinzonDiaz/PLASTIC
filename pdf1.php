<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
	/*			function Header()
				{
				    // Logo
				    $this->Image('imagenes/logo1.png',3,3,33);
				    $this->Image('imagenes/logo2.png',95,3,20);
				    $this->Image('imagenes/logo3.png',187,3,20);
				    // Arial bold 15
				    /*$this->SetFont('Arial','B',13);
				    // Movernos a la derecha
				    $this->Cell(35);
				    // Título
				    $this->Cell(0,35,'PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V');*/
				    // Salto de línea
				    //$this->Ln(20);
				//}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    //$this->SetY(-15);
    $this->Image('imagenes/piePagina.png',3,255,200);
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
header("Content-Type: text/html; charset=iso-8859-1 ");
$pdf->AddPage();

$pdf->Image('imagenes/logo1.png',3,3,33);
$pdf->Image('imagenes/logo2.png',95,3,20);
$pdf->Image('imagenes/logo3.png',187,3,20);


$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,20,'');
$pdf->Ln();
$pdf->Cell(35);
$pdf->Cell(0,0,'PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V');
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40);
$pdf->Cell(0, 15, 'AUTORIZACIÓN PARA LA CAPTURA DE IMAGENES', 0,'C');
 
$pdf->Ln();
$pdf->Ln();	
$pdf->Cell(0, 0, 'Fecha:  ', 0);
$pdf->Ln(23);

/*for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);*/
$pdf->Output();
?>