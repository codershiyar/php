<?php 

// GET
// POST
//$_GET['']
//$_POST['']
?>
<?php 
// POST  GET   $_GET[''] $_POST['']
 ?>

<form method="POST" action="home.php">
Number 1<input type="number" name="n1" />
Number 2 <input type="number" name="n2" />
<button type="submit" name="send">ارسال</button>
</form>


<form method="POST">
    red <input type="radio" name="color" value="red"/>
    orange <input type="radio" name="color" value="orange"/>
    green <input type="radio" name="color" value="green"/>

  <button type="submit" name="change_background"> تغير خلفية</button>  
</form>

<?php
if(isset($_POST['change_background'])){
echo "<style> body{background:".$_POST['color'].";} </style>";
}
?>

<!-- 
متى نستخدم GET و متى نستخدم POST و الفرق بين post و get فى PHP
لعلك تتسأل الان عن الفرق بينهم ومتى تستخدم كل خاصية منهم

ولفهم الفرق بينهم سنقارن بينهم فى شكل نقاط

عند الضغط على زر الرجوع او اعادة تحميل الصفحة

فى حالة GET : غير ضارة

فى حالة POST : سيقوم المتصفح باشعار المستخدم لاعادة ارسال الفورم

الاشارة المرجعية او Bookmark

فى حالة GET : يمكن عمل اشارة مرجعية لها

فى حالة POST : لا يمكن

الكاش Cache
فى حالة GET : يحدث لها

فى حالة POST : لا يحدث لها

History فى المتصفح

فى حالة GET : تخزن فى History

فى حالة POST : لا تحزن فى History

طول البيانات

فى حالة GET : لانها تستخدم URL لارسال البيانات فهى محدودة لان اقصى طول لعنوان URL هو 2048

فى حالة POST : غير محدودة

نوع البيانات

فى حالة GET : فقط نوع البيانات ASCII

فى حالة POST : أي نوع بيانات , النوع الثنائى او Binary ايضًا متاح

الامان

فى حالة GET : اقل من حيث الامان فلا تستخدمها فى ارسال بيانات حساسة مثل الرقم السرى او خلافه لان البيانات تصبح جزء من عنوان المتصفح URL

فى حالة POST : اكثر امانًا لان البيانات لاتخزن فى المتصفح او URL

الرؤية

فى حالة GET : يمكن للجميع رؤية البيانات لانها ببساطة جزء من عنوان URL

فى حالة POST : البيانات مخفية

إذا يمكن تلخيص الفروق السابقة انه فى حالة البيانات الحساسة مثل الرقم السرى او الحساب البنكى او خلافة لاتستخدم GET ام فى حاجة اسكربت البحث مثلًا يمكن استخدام GET.

كان هذا درسنا لليوم عن الفرق بين post و get فى PHP وشكرًا لكم. -->