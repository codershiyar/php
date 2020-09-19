<?php require_once 'index.php' ;
$app = new App();
echo $app->appName . '<br>';
echo $app->appVersion . '<br>';
echo $app->getTime();
$app->printAppName();

?>
