
<!-- 
  CODER SHIYAR - كودر شيار
  ------------------------- 
-->

<form method="GET">
<input type="text" name="data"/>
<input type="email" name="email"/>

<button type="submit">ارسال</button>
</form>


<?php


if(isset($_GET['data'])){  // هنا تقول ان كانت متغير الذي قمت بتحديده يتواجد 
  // ارغب بأن يتم تنفيذ الاوامر الذي اقوم بكتابته هنا
  echo $_GET['data'];
}else{
// هنا تقول ان كانت متغير الذي قمت بتحديده لا يتواجد 
  // ارغب بأن يتم تنفيذ الاوامر الذي اقوم بكتابته هنا

}
?>

















<?php

// filter_var();

// filter_input();


// FILTER_VALIDATE_URL                      للتحقق من إن كانت بيانات عبارة عن رابط او لا
// FILTER_VALIDATE_IP                للتحقق من إن كانت بيانات عبارة عن عنوان اي بي او لا
// FILTER_VALIDATE_MAC                للتحقق من إن كانت بيانات عبارة عن عنوان ما ك او لا
// FILTER_VALIDATE_EMAIL                  للتحقق من إن كانت بيانات عبارة عن إيميل  او لا
// FILTER_VALIDATE_DOMAIN              للتحقق من إن كانت بيانات عبارة عن اسم دومين او لا
// FILTER_VALIDATE_BOOLEAN للتحقق من إن كانت بيانات عبارة عن بيانات من نوع بوليون او لا
// FILTER_VALIDATE_INT      للتحقق من إن كانت بيانات عبارة عن بيانات من نوع ارقام او لا
// FILTER_VALIDATE_FLOAT             للتحقق إذا كان بيانات  من نوع ارقام بها فاصلة او لا

?>

<!-- <form method="POST">

<input type="text" name="data" />

<button type="submit" name="send">ارسال </button>
</form> -->

<?php 


// if(isset($_POST["send"])){

// $data = filter_var($_POST["data"], FILTER_VALIDATE_EMAIL);

// if($data === false){
// echo "<h2>بيانات غير صالحة<h2>";
// }else{
//   echo "بيانات الذي قمت بتعبئته يكون "   . $data;
// }

// }

?>