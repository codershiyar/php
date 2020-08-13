<?php 

// strip_tags();  لحذف عناصر اتش تي ام ال من النص
//  لتحويل عناصر اتش تي ام ال إلى النص عادي
// filter_var($string , FILTER_SANITIZE_STRING);
$text = "<h1>Coder Shiyar</h1>";
echo filter_var($text,FILTER_SANITIZE_STRING);
 ?>


<form method="POST">
    <input type="text" name="title"/>
    <input type="text" name="text"/>
    <button name="publish" type="submit">نشر</button>
</form>


<?php 
if(isset($_POST['publish'])){
echo $_POST["title"];
echo $_POST["text"];
}
?>