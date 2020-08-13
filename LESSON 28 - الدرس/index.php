<?php 

function setText(){
    $text = "<h1>Coder Shiyar</h1>";
    return  $text;
}
setText();

function setResult($number1 , $number2){
    return $number1 * $number2;
}

$getText = setText();

$getResult = setResult(10,50);

echo $getResult;


echo $getText;

if(setText() === "Coder"){
echo "تم تنفيذ اوامر";
}
?>