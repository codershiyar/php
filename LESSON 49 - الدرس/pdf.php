<?php

require_once __DIR__ . '/pdf/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [290, 100]]);

$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;

$mpdf->AddPage("P");

$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);

if(isset($_GET["text"])){
    $html = '<h1>' . $_GET["text"] . '</h1>';
}

$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("myPDF.pdf","I");