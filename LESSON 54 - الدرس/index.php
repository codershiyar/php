



<form method="POST" enctype="multipart/form-data" >

<input type="file" name="img" required/>

<button type="submit" name="upload">ارسال ملف</button>

</form>

<?PHP 
if(isset($_POST['upload'])){
//$_FILES['']['name'];
//$_FILES['']['tmp_name'];
//$_FILES['']['size']



if($_FILES['img']['size']/1024/1024 > 5  ){
echo 'يجب ان يكون حجم ملف اقل من 5 ميغا بايت';
}else if($_FILES['img']['size']/1024/1024 < 5 ){
move_uploaded_file($_FILES['img']['tmp_name'] , $_FILES['img']['name']);
echo 'تم رفع ملف بنجاح';
}
// move_uploaded_file($_FILES['img']['tmp_name'],'files/' .$_FILES['img']['name']);


}
?>