<?php

require "clientnamecheck.php"; #Проверка поля имени клиента

require_once "constantblocks.php"; #Неизменные блоки текста письма 

// Подставляем жирным цветом название тематики

//require "boldtopic.php";
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

/*echo '<pre>';
print_r($_POST['topic']); 
echo '</pre>';*/

//Вносим samples, создаем переменные
require_once "samples.php";

$bottomline = "<p>I am committed to the best possible customer experience and achieving 100% customer satisfaction! That’s why I do every single thing possible to make each of my customers happy! 
<p>
Thanks.
<br>
Andrey.";


$strsamples = htmlspecialchars($_POST['msg-samples']);
$strwp = htmlspecialchars($_POST['msg-wp']);
$strseo = htmlspecialchars($_POST['msg-seo']);
$strtype = htmlspecialchars($_POST['msg-type']);



require "errors.php"; # - виды ошибок, проверка на ошибки

if (!empty($errors)) {
    foreach ($errors as $err){
        echo "<strong>$err</strong><br>";
    }
}else


{
echo $intro."<br>";

//Вывод samples, если сказано, что samples есть и выбрана тематика
require "displayselectedsamples.php"; 

require "displayselectedblocks.php"; #Выводим выбранные поля WordPress, SEO и вид работы Hourly, Fixed или Budget
 
echo $bottomline."<br>";
//echo "Выбранно <strong>$l</strong> полей";
}

?>