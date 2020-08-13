<?php 

// FILTER_SANITIZE_EMAIL	
// FILTER_SANITIZE_NUMBER_FLOAT	
// FILTER_SANITIZE_NUMBER_INT	
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_URL

$email = filter_var("test<>@gmail.com",FILTER_SANITIZE_EMAIL) ;
echo $email;

$numberFloat = filter_var("20-25E test number float",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC);

echo "<br>" . $numberFloat;

$numberInt = filter_var("12 text" , FILTER_SANITIZE_NUMBER_INT) ;
echo "<br>" . $numberInt;

$text = filter_var("<h1> Coder Shiyar </h1>" , FILTER_SANITIZE_STRING) ;
echo $text;
?>

