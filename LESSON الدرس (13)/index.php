
<?php

$text = "     I do not love Coder Shiyar       ";
$strlen = strlen($text);

$text_count_word = str_word_count($text);

$text_strrev = strrev($text);
$text_strops = strpos($text,"coder");

$text_replace = str_replace('do not',' ',$text);

$text_trim = trim($text);
// var_dump($text_strops);
echo $text;
/*
 strlen(text)   يقوم بإعادة عدد احرف البيانات مخزنة ضمن متغير من نوع نصي
 str_word_count(text) من خلال هذا عنصر يمكنك معرفة عدد كلمات البيانات مخزنة ضمن متغير 
 strrev(text) هذا عنصر يقوم بعكس الأحرف 

 من خلال هذا عنصر يمكنك بحث عن كلمة او جملة في بيانات مخزنة ضمن المتغير
 strops(text,search_value)

 من خلال هذا عنصر يمكنك استبدال كلمة او جملة من بيانات
  المخزنة ضمن المتغير بجملة او كلمة أخرى
str_replace()

هذا عنصر يقوم بحذف الفراغات في البداية والنهاية البيانات النصي
trim()

*/


?>



