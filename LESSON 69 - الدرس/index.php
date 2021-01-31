<?php
// ---------------------------------------------------------------------------------
// json_last_error()            json_decode  json_encode              JSON - PHP
// ---------------------------------------------------------------------------------
// المعني                                                             	 القيمة	
// ---------------------------------------------------------------------------------
// JSON_ERROR_NONE	 0                                            لم يحصل أي خطأ.	
// JSON_ERROR_DEPTH	  1                            تم تجاوز القيمة القصوى للعمق.	
// JSON_ERROR_STATE_MISMATCH 2	                            صيغة JSON غير صالحة.	
// JSON_ERROR_CTRL_CHAR	3                خطأ محرف التّحكّم، غالبًا ترميز غير صحيح.	
// JSON_ERROR_SYNTAX	4                                         خطأ في الصّياغة.	
// JSON_ERROR_UTF8	 5       أحرف ترميز UTF-8 مُشوّهة، مُرمَّزة غالبًا بشكل غير صحيح.	
// JSON_ERROR_RECURSION	6        وجود مَرجِع تكراري أو أكثر في القيمة التي ستُرمَّز.	
// JSON_ERROR_INF_OR_NAN 7	القيمة التي ستُرمَّز تحوي على INF (لا نهاية) أو القيمة NAN
//                         (وهي قيمةٌ لا تُمثِّل عددًا وهي اختصارٌ للعبارة Not-A-Number).
// JSON_ERROR_UNSUPPORTED_TYPE	8               أُدخِلت قيمة من نوع لا يُمكِن ترميزه.	
// JSON_ERROR_INVALID_PROPERTY_NAME	 9              أُدخِل اسم خاصّيّة لا يُمكِن ترميزه.
// JSON_ERROR_UTF16	أحرف ترميز UTF-16 10        مُشوّهة، مُرمَّزة غالبًا بشكل غير صحيح.	

$data = '{"name" : "coder shiyar"}';
$arrayData =["name"=>"tester"];
var_dump(json_encode($arrayData));
$error = json_last_error();
var_dump($error);
?>
