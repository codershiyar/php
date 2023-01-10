<?php 
echo "htaccess Lesson -  شرح ملف اتش تي اكسس"
// -------------------------------------------------1--------------------------------------------------------
// The . htaccess file is a powerful website file that controls high-level configuration of your website. 
// On servers that run Apache (a web server software), the .htaccess file allows you to make changes to
//  your website's configuration without having to edit server configuration files
//                                            يسمح لك ملف ات تي اكسس بإجراء تغييرات على تكوين موقع الويب 
// الخاص بك دون الحاجة إلى تحرير ملفات تكوين الخادم
// -------------------------------------------------2-------------------------------------------------------------------
// .htaccess files affect the directory in which they are placed in and all children (sub-directories)
// . For example if there is one .htaccess file located 
// .htaccess                                                                            
//                        تؤثر على ملفات بالمجلد الذي يتم وضعها فيه وجميع عناصر في مجلدات الفرعية
// -------------------------------------------------3-------------------------------------------------------------------
// Features With an .htaccess file you can:                         الميزات مع ملف اتش تي اكسس يمكنك:
// Redirect the user to different page                          إعادة توجيه المستخدم إلى صفحة مختلفة
// Password protect a specific directory                                  حماية احد مجلدات بكلمة مرور
// Block users by IP                                   منع المستخدمين عن طريق عنوان بروتوكول الإنترنت
// Preventing hot-linking of your images
// Rewrite URLs                                                                 أعد كتابة عناوين روابط
// Specify your own Error Documents                                     تحديد مستندات الخطأ الخاصة بك
// ------------------------------------------------4----------------------------------------------------
// Removing Extensions          إزالة الامتدادات
// To remove the .php extension from a PHP file for example yoursite.com/app.php to yoursite.com/app 
// you have to add the following code inside the .htaccess file:
// -----------------------------------------------------------------------------------------------------
// Options +MultiViews
// RewriteEngine On
// RewriteCond %{REQUEST_FILENAME} !-f
// RewriteRule ^([^\.]+)$ $1.php [NC,L]
// -----------------------------------------------------------------------------------------------------
// If you want to remove the .html extension from a html file for example yoursite.com/app.html to yoursite.com/app 
// you simply have to change php to html
// RewriteRule ^([^\.]+)$ $1.html [NC,L]
// ------------------------------------------------5----------------------------------------------------
// إعادة صفحة غير متواجدة في حال حاول مستخدم بوصول للمسار عبر تحديد لاحقة الملف بي اتش بي او اتش تي ام ال
# Return 404 if original request is yoursite.com/app.php
# RewriteCond %{THE_REQUEST} "^[^ ]* .*?\.php[? ].*$"
# RewriteRule .* - [L,R=404]
# Return 404 if original request is yoursite.com/app.html
# RewriteCond %{THE_REQUEST} "^[^ ]* .*?\.html[? ].*$"
# RewriteRule .* - [L,R=404]
?>