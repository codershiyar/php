<?php

header("Access-Control-Allow-Origin: *");
// هذا جزء لكي يدعم احرف اللغة العربية ولغات اخرى بشكل صحيح وايضا لدعم بيانات من نوع جي سون
header("Content-Type: application/json; charset=UTF-8");
// هذا جزء لتحديد طرق وصول إلى هذا اي بي اي
header("Access-Control-Allow-Methods: *");
// هذا جزء يشير إلى المدة التي يمكن فيها تخزين نتائج عند طلب الاختبار المبدئي مؤقتًا
header("Access-Control-Max-Age: 3600");
// اعطى صلاحيات للمتصفح لتبادل البيانات دون ظهور اخطاء
header("Access-Control-Allow-Headers: *");


$data = ["Name" => "Coder Shiyar" , "Website"=>"https://codershiyar.com"];
$JSON_data = json_encode($data);
print_r($JSON_data);
