<?php 
 // طريقة إنشاء كلاس
class App{
  
   // طريقة إنشاء كونستروكتور كلاس
    function __construct($img , $title)
    { 
        echo $img;
        echo $title;
    }

}
 // طريقة إنشاء اوبجكت كلاس

$app = new App('<img src="https://codershiyar.com/img/logo.jpg" width="200" />',
" <h1>Coder Shiyar</h1>");


?>
