<?php 
// function must be the very first thing in your document. Before any HTML tags.
// يجب أن تكون هذه الوظيفة هي أول شيء في الصفحة. قبل أي عناصر اتش تي ام ال.
// session_start();

// // remove all session variables  -  لحذف جميع متغيرات من نوع سشن
//  session_unset();

// // destroy the session           -                      لتدمير سشن
// session_destroy();

session_start();


$_SESSION["email"] = "team.codershiyar@gmail.com";

?>


<h2> <?php
if(!empty($_SESSION["email"])){
    echo $_SESSION["email"];  
}else{
    echo "ذلك متغير غير متواجد";
}

 
 ?> </h2>