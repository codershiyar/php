<?php 
// -- 
// ==	Equal	                    متساوية
// ===	Identical	                 مطابقة	
// !=	Not equal	            غير متساوية
// <>	Not equal		        غير متساوية
// !==	Not identical	         غير مطابقة  
// >	Greater than	            أكبر من
// <	Less than		            أصغر من
// >=	Greater than or equal to	أكبر من او يساوي
// <=	Less than or equal to	    أصغر من او يساوي
// <=>



$point_student ="70 dfsdfo";

if($point_student >=90){
echo  "علامة الطالب ممتازة";
}elseif($point_student>=70){
  echo  "علامة الطالب جيد جدا";
}elseif($point_student>=50){
  echo  "علامة الطالب وسط";
}elseif($point_student<50){
  echo  "علامة الطالب ضعيفة";
}
?>