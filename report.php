<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('Menggunakan Library DOMpdf untuk Membuat Report PDF dengan DOMPDF');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4','Lanscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('hasil_report.pdf')
?>
