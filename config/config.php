<?php

// Определим константы
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('PATH_TO_PUBLIC', $_SERVER['DOCUMENT_ROOT']);
define('PATH_TO_PROJECT', rtrim(PATH_TO_PUBLIC, '/public'));

// Подключаемые модули
// Глобальные, работают на всех страницах
include PATH_TO_PROJECT . '/engine/functions.php';
include PATH_TO_PROJECT . '/engine/menu.php';



//Локальные, нужны для работы отдельных страниц
include PATH_TO_PROJECT . '/engine/catalog.php';