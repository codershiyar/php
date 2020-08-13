<?php

require_once __DIR__ . '/pdf/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
// $mpdf->AddPage("L");

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
session_start();
if(isset($_SESSION['html'])){
    $html = $_SESSION['html'];  
}

$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("myPDF.pdf","I");