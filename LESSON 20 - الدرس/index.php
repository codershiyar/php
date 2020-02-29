
<?php
$name = "Amin";
$age = 20;
$salary = 2200.00;
 // نوع الاول - indexed array
$id1 = ["Amin" , 20 , 2200.00 , "نعم"]; 

// echo "الأسم: ".$id1[0] . "العمر:" .$id1[1];


$id2 = array("Amir" , 20 , 4200.00 , "لا" ); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">اسم</th>
      <th scope="col">عمر</th>
      <th scope="col">راتب</th>
      <th scope="col">متزوج</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php
  foreach($id1 as $data){
   
    echo " <th>$data</th>" ;
}
  ?>      
    </tr>

    <tr>
    <?php
//   foreach($id2 as $data){
   
//     echo " <th>$data</th>" ;
// }

for($i = 0; $i<count($id2);++$i){
    echo " <th>$id2[$i]</th>" ;
}
  ?>     
    </tr>
  </tbody>
</table>

</body>
</html>
