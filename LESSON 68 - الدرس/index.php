<?php
// --------------------------------------------------------------
// json_encode()               JSON - PHP
// --------------------------------------------------------------
// 1) لتحويل اوبجكت  بي اتش بي عادي او  ارراي  إلى بيانات من نوع اوبجكت جي سون
// --------------------------------------------------------------
$data = ["name"=>"coder shiyar" , "age"=>"20"];

// var_dump(json_encode($data));

class App{
   public $appName = "PHP CODER SHIYAR";
   public $appVersion = 1.0;
   function __constructo(){

   }
}

$app = new App();
var_dump(json_encode($app));
?>
