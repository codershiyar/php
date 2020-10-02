<?php 
 // طريقة إنشاء كلاس
class App{
  
   // طريقة إنشاء كونستروكتور كلاس
    function __construct()
    { 
    //    $this->printMessage();
    }
    
    function printMessage($title){
        echo  $title ;
    }
}
 // طريقة إنشاء اوبجكت كلاس
$app = new App();
$app->printMessage('<h1>Coder Shiyar</h1>');

?>
