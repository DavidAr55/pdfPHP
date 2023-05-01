<?php
    require 'vendor/autoload.php';
    include 'pdf.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->render();
    $dompdf->stream('Ticket de compra.pdf');