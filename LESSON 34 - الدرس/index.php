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

  if(isset($_POST["email"])){
$data = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

  }

$data_input = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

var_dump($data_input);

if($data_input!= false){
echo "بيانات صالحة";
}else{
  echo "بيانات  غير صالحة";
}

}

?>