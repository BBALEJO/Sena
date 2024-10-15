<?php
require('../../../fpdf/fpdf.php');
require('../Modelo/producto.php');

class PDF extends FPDF{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image(__DIR__.'/../../Recursos/Imagenes/IconLogin.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(40,10,utf8_decode('Fruteria Las uvas azules'),0,1,'C');
    // Salto de línea
    $this->Ln(50);

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // N úmero de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//Espacio para mostrar tabla



//leer las lineas del fichero
$objetoModelo= new producto();
$usuarios=$objetoModelo->get();

if ($usuarios!=null){
    $pdf->Cell(10,10,'ID',1,0,'C');
    $pdf->Cell(40,10,'Nombre',1,0,'C');
    $pdf->Cell(60,10,'Correo',1,0,'C');
    $pdf->Cell(30,10,'Celular',1,0,'C');
    $pdf->Cell(40,10,'Direccion',1,0,'C');
    $pdf->Ln();



    foreach ($usuarios as $usuario){
    $pdf->Cell(10,10,$usuario['idusuario'],1,0,'R',0);
    $pdf->Cell(40,10, utf8_decode($usuario['nombreusuario']),1,0,'R',0);
    $pdf->Cell(60,10,$usuario['correousuario'],1,0,'R',0);
    $pdf->Cell(30,10,$usuario['telefonousuario'],1,0,'R',0);
    $pdf->Cell(40,10, utf8_decode($usuario['direccionusuario']),1,0,'R',0);
    $pdf->Ln(10);
    }
    $pdf->Write(20,'Cualquier error comuniquese al 01-8000-4245','');

}
$pdf->Output('I','reporte.pdf');
?>