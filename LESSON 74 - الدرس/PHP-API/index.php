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

// file_get_contents('php://input');
$data = file_get_contents('php://input');
$data = json_decode($data);
// print_r($data);

if(isset($data->key)){

print_r(json_encode(["password"=>"test1234","email"=>"test@gmail.com"]));
}else{
    print_r(json_encode(["message"=>"خطا"]));
}