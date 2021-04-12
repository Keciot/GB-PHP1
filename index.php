<?php

define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

function renderTemplate($page, $params = [])
{
    ob_start();
    extract($params);
    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    } else {
        include TEMPLATES_DIR . "notfound.php";
    }
    return ob_get_clean();
}

function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu'),
        'content' => renderTemplate($page), 
        'footer' => renderTemplate('footer'),

    ]);
}

echo render($page);
