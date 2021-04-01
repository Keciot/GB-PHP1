<?php
$title = "Главная страница - страница обо мне";
$header1 = "Информация обо мне";
$year = 2021;

$content = file_get_contents('index.html'); 
$content = str_ireplace('{{TITLE}}', $title, $content);
$content = str_ireplace('{{HEADER}}', $header1, $content);
$content = str_ireplace('{{YEAR}}', $year, $content);
echo $content;