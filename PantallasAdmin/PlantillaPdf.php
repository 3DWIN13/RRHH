<?php 
require('fpdf.php'); 
include '../librerias/motor.php';

class PDF extends FPDF 
{ 
	// Page header 
	function Header() 
	{ 
		// GFG logo image 
		$this->Image('../img/logo.jpg', 30, 8, 20); 
		
		// GFG logo image 
		$this->Image('../img/logo.jpg', 160, 8, 20); 
		
		// Set font-family and font-size 
		$this->SetFont('Times','B',20); 
		
		// Move to the right 
		$this->Cell(80); 
		
		// Set the title of pages. 
		$this->Cell(30, 20, 'Reportes de Empleados', 0, 2, 'C'); 
		
		// Break line with given space 
		$this->Ln(5); 
	} 
	
	// Page footer 
	function Footer() 
	{ 
		// Position at 1.5 cm from bottom 
		$this->SetY(-15); 
		
		// Set font-family and font-size of footer. 
		$this->SetFont('Arial', 'I', 8); 
		
		// set page number 
		$this->Cell(0, 10, 'Page ' . $this->PageNo() . 
			'/{nb}', 0, 0, 'C'); 
	} 
} 

// Create new object. 
$pdf = new PDF(); 
$pdf->AliasNbPages(); 

// Add new pages 
$pdf->AddPage(); 

// Set font-family and font-size. 
$pdf->SetFont('Times','',12); 

// Loop to display line number content 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf ->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', 15);

$pdf->Cell(38,6,'NOMBRE', 1, 0, 'C',1);
$pdf->Cell(38,6,'APELLIDO', 1, 0, 'C',1);
$pdf->Cell(38,6,'CORREO', 1, 0, 'C',1);
$pdf->Cell(38,6,'PUESTO', 1, 0, 'C',1);
$pdf->Cell(38,6,'Telefono', 1, 1, 'C',1);


$pdf->SetFont('Arial', '', 10);
$us = MostrarEmpleados();
foreach ($us as $mostrar){
$pdf->Cell(38,6,$mostrar['Nombres'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['Apellidos'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['Correos'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['Puestos'], 1, 0, 'C');
$pdf->Cell(38,6,$mostrar['Telefonos'], 1, 1, 'C');
}

$pdf->Output(); 