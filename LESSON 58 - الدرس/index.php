<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container">

<form method="POST" enctype="multipart/form-data">
Subject <input class="form-control" type="text" name="subject"/>
<br>
Message <input class="form-control" type="text" name="body"/>

<input class="form-control" type="file" name="file" />
<button class="btn btn-outline-danger btn-block mt-3" type="submit" name="send">ارسال</button>
</form>


<?php 

if(isset($_POST['send'])){
    require_once 'mail.php';
    $mail->setFrom('academyshiyar@gmail.com', 'Academy Shiyar');
    $mail->addAddress('codershiyar@gmail.com');
  //  $mail->addCC('academyshiyar@gmail.com');
    $mail->Subject = $_POST["subject"];
    $mail->Body    =$_POST["body"];

   move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
  
   $mail->addAttachment($_FILES['file']['name']);
  //  $mail->addAttachment('files/' . $_POST['file']);    // Optional name
    $mail->send();
  unlink($_FILES['file']['name']);
   header("Location: index.php", true);

}

?>

</div>



