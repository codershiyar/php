<?php 
$year = 2021;
switch($year){
    case "2020":
        echo "سنة يكون 2020";
    break;
    case 2020 :
        echo "سنة يكون 2020 من نوع ارقام"; 
    break;
    default:
    echo "لم يتطابق اي احتمالات مع قيمة المتغير";
break;
}

$color =1;
switch($color){
    case 1:
        echo "<style> body{
            background: red;
            color:white;
        } </style>";
        echo "<h1>احتمال اول</h1>";
    break;
    case 2:
        echo "<style> body{
            background: black;
        } </style>";
    break;
    case 3:
        echo "<style> body{
            background: yellow;
        } </style>";
    break;
}

?>