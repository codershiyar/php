<?php 
class App{

    public $appName = "Coder Shiyar";
    public $appVersion = 1.0;

    function __construct()
    {
        
    }

    function getTime(){
        return date("H:i");
    }
    function printAppName(){
        echo '<h1>'. $this->appName.'</h1>';
    }
}
?>
