  
<?php
// $product = [ ["موز","برتقال","تفاح"] , ["خيار",'كوسا',"بندورة"]  ];

// print_r($product);

// // echo "<h1>".$product[1][0]."</h1>";

// foreach($product as $result){
//   echo "<h1>" .  $result[1] . "</h1>"; 
// }

$user = [  
        ["id"=>1 , "name"=>"Coder Shiyar" , "email" =>"test@gmail.com"],
        ["id"=>2 , "name"=>"Hamid" , "email" =>"test2@gmail.com"] 
];

foreach($user as $data){
echo "<h3>" . $data['name'] . "</h3>";
echo "<h3>" . $data['email'] . "</h3>";
}


?>

