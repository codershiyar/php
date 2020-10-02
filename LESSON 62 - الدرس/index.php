<?php 
 // طريقة إنشاء كلاس
class App{
   protected $country = 'Kurdistan'; 
  public $age = '20';  
  private $name = "Coder Shiyar";
   // طريقة إنشاء كونستروكتور كلاس
    function __construct()
    {   
       echo $this->name;
        // echo 'Hi from Class App';
    }

}
 // طريقة إنشاء اوبجكت كلاس

$app = new App();
// echo $app->age;
// // echo $app->country;
// echo $app->name;

?>