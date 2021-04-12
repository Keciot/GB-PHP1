<?php
//Подключаем конфиг
include "../config/config.php";

// Находим и задаем page из адреса
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

//Подбираем нужные параментры для конкретной страницы
$params = [''];

switch ($page) {
    case 'index':
        $params['name'] = 'Username';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;
}

//Запускаем сборку страницы с параметрами
echo render($page, $params);

