<?php 

if(isset($_POST['send'])){
    require_once 'mail.php';
    $mail->setFrom('academyshiyar@gmail.com', 'Academy Shiyar');
    $mail->addAddress('codershiyar@gmail.com');
  //  $mail->addCC('academyshiyar@gmail.com');
    $mail->Subject = 'رسالة تجريبية';
    $mail->Body    = 'Test from Shiyar <b>PHP Mailer</b>';
    $mail->send();
   header("Location: index.php", true);
}

?>

<form method="POST">
<button type="submit" name="send">ارسال</button>
</form>

