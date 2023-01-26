<?php
require_once './../vendor/autoload.php';

$faker = Faker\Faktory::create();
use Dompdf\Dompdf;

$Dompdf = new Dompdf();

$html = "This is Document PDF <h1>this is veru colll</h1>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>