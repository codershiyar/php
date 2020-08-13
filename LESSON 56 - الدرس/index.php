



<form method="POST" enctype="multipart/form-data" >

<input type="file" name="file" required/>

<button type="submit" name="upload">ارسال ملف</button>

</form>

<?PHP 

var_dump(file_exists("files/"."img.jpg"));
if(isset($_POST['upload'])){
//$_FILES['']['name'];
//$_FILES['']['tmp_name'];
//$_FILES['']['size']
//$_FILES['']['type']



if(file_exists("files/".$_FILES['file']['name']) === false){
   move_uploaded_file($_FILES['file']['tmp_name'] ,"files/". $_FILES['file']['name']); 
}else if(file_exists("files/".$_FILES['file']['name']) === true){
echo 'هذا ملف تم رفعها سابقا في مسار التالي : ' . "files/".$_FILES['file']['name'];
}



}
?>