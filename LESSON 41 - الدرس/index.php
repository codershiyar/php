<?php
// $_SERVER['PHP_SELF']    	      يقوم بإرجاع اسم ملف مع اسم مجلد الذي يتواجد ملف بها
// $_SERVER['SCRIPT_FILENAME'];               يقوم بإرجاع عنوان مسار ملف حاليًا بالكامل  
// $_SERVER['REQUEST_METHOD']   POST إرجاع طريقة الطلب المستخدمة للوصول إلى الصفحة مثل 
// $_SERVER['QUERY_STRING']                    يقوم بجلب لك البيانات المتواجدة بالرابط 
echo  $_SERVER['QUERY_STRING'];

?>

<form method="GET">
<input type="text" name="text"/>
<button type="submit">ارسال</button>
</form>













<?php

// $_SERVER['SERVER_ADDR']	                      يقوم بإرجاع عنوان اي بي لخادم مضيف
// $_SERVER['SERVER_NAME']	                           إرجاع اسم الخادم المضيف للموقع
// $_SERVER['REMOTE_ADDR']	يقوم بإعادة عنوان اي بي مكان الذي يتصفح المستخدم لموقعك
?>