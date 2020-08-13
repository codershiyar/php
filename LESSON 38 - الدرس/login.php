<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Coder Shiyar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Coder Shiyar </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://youtube.com/codershiyar">YouTube <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:acdemyshiyar@gmail.com">Contact</a>
      </li>
     
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:20px;" >
  <!-- Content here -->
  <?php 
$username = "codershiyar";
$password = "12345";


if(isset($_POST['login'])){
$getUserName = $_POST['username'];
$getPassword = $_POST['password'];

if($username === $getUserName && $password === $getPassword){
    session_start();
    $_SESSION['USER'] = $getUserName;
    $_SESSION['PASSWORD'] = $getPassword;
    $_SESSION['LOGIN'] = true;
    echo "<script> location.replace('index.php') </script>";

}else{
    echo '<div class="alert alert-danger" role="alert">
    كلمة مرور او اسم مستخدم غير صحيح
  </div>';
 
}

}

?>

  <form method="POST">

Username : <input type="text" name="username" required  class="form-control"/>
<br>
Password : <input type="password" name="password" required class="form-control" />
<br>
<button class="btn btn-warning" name="login" type="submit">Login</button>
</form>



</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>





