<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(190, 10, 'Stock Product', 0, 0, 'C');

$pdf->Ln(15);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(8, 7, 'NO', 1, 0, 'C');
$pdf->Cell(87, 7, 'MERK', 1, 0, 'C');
$pdf->Cell(45, 7, 'HARGA', 1, 0, 'C');

$pdf->Ln();
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM barang");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(8, 6, $no++, 1, 0, 'C');
    $pdf->Cell(87, 6, $d['nama'], 1, 0);
    $pdf->Cell(45, 6, $d['harga'], 1, 0, 'R');
    $pdf->Ln();
}

$pdf->Output();
