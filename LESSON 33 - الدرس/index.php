<?php

// filter_var();

// filter_input();

// FILTER_VALIDATE_URL
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_MAC
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_DOMAIN
// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_INT

?>

<form method="POST">

<input type="text" name="data" />

<button type="submit" name="send">ارسال </button>
</form>

<?php 


if(isset($_POST["send"])){

$data = filter_var($_POST["data"], FILTER_VALIDATE_EMAIL);

if($data === false){
echo "<h2>بيانات غير صالحة<h2>";
}else{
  echo "بيانات الذي قمت بتعبئته يكون "   . $data;
}

}

?>