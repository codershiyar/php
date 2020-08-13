



<form method="POST" enctype="multipart/form-data" >

<input type="file" name="file" required/>

<button type="submit" name="upload">ارسال ملف</button>

</form>

<?PHP 

if(isset($_POST['upload'])){
//$_FILES['']['name'];
//$_FILES['']['tmp_name'];
//$_FILES['']['size']
//$_FILES['']['type']



if($_FILES['file']['type'] === "image/jpeg" || $_FILES['file']['type'] === "image/png"){
echo 'ملف مدعوم';
move_uploaded_file($_FILES['file']['tmp_name'] , $_FILES['file']['name']);
}else{
  echo 'هذا ملف صيغتها غير مدعومة , يرجى اختيار ملف من صيغة jpeg'; 
}

}
?>