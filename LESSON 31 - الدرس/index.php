<?php 
// htmlspecialchars(); 

// htmlspecialchars_decode(); 

$html_text = "<h2>Coder Shiyar</h2>";
$text = htmlspecialchars($html_text);
echo $text;

$html_codes = htmlspecialchars_decode($text);

echo $html_codes;
?>