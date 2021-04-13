<?php 
$menuArr = [
    [
        'title' => 'Главная',
        'href' => 'index.php'
    ],
    [
        'title' => 'Каталог',
        'href' => '/?page=catalog'
    ],
    [
        'title' => 'Контакты',
        'href' => '/?page=contacts'
    ],
    [
        'title' => 'Пункт меню',
        'href' => '/?page=nextmenu',
        'subitems' => [
            [
                'title' => 'Подменю 1',
                'href' => '/?page=nextmenu/sub1'
            ],
            [
                'title' => 'Подменю 2',
                'href' => '/?page=nextmenu/sub2'
            ]
        ]
    ],

];

$result = "<ul>";
$result .= menuRender($menuArr);
$result .= "</ul>";

echo $result;



