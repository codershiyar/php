<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Shiyar</title>
</head>
<body>
    
<?php 
$username = "codershiyar";
$password = "12345";

$username2 = "codershiyar";
$password2 = "12345";

$username3 = "codershiyar";
$password3 = "12345";

session_start();

if(isset($_SESSION['USER'])  && isset($_SESSION['PASSWORD']) &&  isset($_SESSION['LOGIN'])){

  if($username === $_SESSION['USER'] && $password === $_SESSION['PASSWORD']){
    echo "اهلا بك " . $username;
    echo "<form method='POST'> <button type='submit' name='logout'>Logout</button> </form>";
  }else if($username2 === $_SESSION['USER'] && $password2 === $_SESSION['PASSWORD']){

  }
  else if($username3 === $_SESSION['USER'] && $password3 === $_SESSION['PASSWORD']){

}
}else{
    echo "<script> location.replace('login.php') </script>";
}



if(isset($_POST['logout'])){
    echo "<script> location.replace('login.php') </script>";
    session_unset();
}

?>

</body>
</html>
