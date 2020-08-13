<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<form method="POST">
<input class="form-control" type="text" name="title"/>
<br>
<input class="form-control" type="text" name="content"/>

<br>
<input  class="form-control"type="file" name="img"/>

<button class="btn btn-outline-danger m-3" name="send" type="submit"> إنشاء ملف PDF</button>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



<?php 

if(isset($_POST['send'])){
session_start();
$_SESSION['html'] = '<h1>' . $_POST['title'] .'</h1>' ;
$_SESSION['html'] .= '<p>' . $_POST['content'].'</p>';
$_SESSION['html'] .= '<img src="img/' .$_POST['img'] . '" />';
header('Location: pdf.php' , true);

}
?>
