<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Shiyar</title>
</head>
<body dir="rtl">
  
<form method="POST">
<label>السعر</label>
<input type="text" name="price" required>
<label>نسبة تخفيض (%)</label>
<input type="text" name="discount" required/>
<button type="submit" name="submit">عرض السعر بعد تخفيض</button>
</form>
<?php 
if(isset($_POST['submit'])){

if(is_numeric($_POST['price'])==false){
echo '<h3>بيانات الحقل السعر غير صالح</h3>';
}
if(is_numeric($_POST['discount'])==false){
    echo '<h3>بيانات الحقل النسبة تخفيضات غير صالح</h3>';
}

if(is_numeric($_POST['price'])==true && is_numeric($_POST['discount']) == true){
echo "<p>سعر قبل التخفيض ".$_POST['price']."</p>";
$result = $_POST['price'] * (100- $_POST['discount']) / 100;
echo " سعر بعد التخفيض ";
echo "بالنسبة " . $_POST['discount'] . "% ";
echo " يكون " . $result . " ليرة";}

}
?>

<form method="GET">
<div>
    <label>أسم : </label> <br>
    <input type="text" name="name" required/>
</div>
<div>
    <label>إيميل : </label><br>
    <input type="email" name="email" required/>
</div>
<div>
    <label>موضوع : </label><br>
    <input type="text" name="subject" required/>
</div>

<div>
    <label>رسالة : </label><br>
    <input type="text" name="message" required/>
</div>

<button type="submit" name="send">ارسال رسالة</button>
</form>

<?php 
if(isset($_GET['send'])){
echo "الأسم : ".$_GET['name'] . "<br>";
echo "إيميل : ".$_GET['email'] . "<br>";
echo "موضوع : ".$_GET['subject'] . "<br>";
echo "رسالة : ".$_GET['message'] . "<br>";
}
?>

</body>
</html>