<?php 
if(file_exists(''.'img.jpg')===true){
   unlink(''.'img.jpg');
}else if(file_exists(''.'img.jpg')===false){
echo 'الملف الذي ترغب بحذفها سابقا تم حذفها';
}

?>