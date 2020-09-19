<?php 
 // طريقة إنشاء كلاس
class App{

   // طريقة إنشاء كونستروكتور كلاس
    function __construct()
    {  
        echo 'Hi from Class App';
    }

}
 // طريقة إنشاء اوبجكت كلاس

$app = new App();
$app2 = new App();

?>