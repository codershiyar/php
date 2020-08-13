<form method="POST">
Username : <input type="text" name="username" required />
<br>
Password : <input type="password" name="password" required />
<br>
<button name="login" type="submit">Login</button>
</form>

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
    echo "كلمة مرور او اسم مستخدم غير صحيح";
}




}

?>

