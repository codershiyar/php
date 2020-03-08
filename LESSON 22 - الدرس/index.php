  
<?php

$ID90324 = array("Shiyar Jamo","1994-11-09","Kobani");

for($counter=0;$counter<count($ID90324) ; $counter++){
    echo "<h1>".$counter.": ".$ID90324[$counter]."</h1>";
}

foreach($ID90324 as $data){

echo "<h1>" . $data . "</h1>";
}
?>

