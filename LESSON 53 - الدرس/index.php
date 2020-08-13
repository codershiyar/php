



<form method="POST" enctype="multipart/form-data" >

<input type="file" name="img" required/>

<button type="submit" name="upload">ارسال ملف</button>

</form>

<?PHP 
if(isset($_POST['upload'])){
//echo  $name = $_FILES['img']['name'];
// echo  $name = $_FILES['img']['tmp_name'];

move_uploaded_file($_FILES['img']['tmp_name'],'files/' .$_FILES['img']['name']);


}
?>