<?php

//Создание страницы по шаблону
function renderTemplate($page, $params = [])
{
    ob_start();
    extract($params);
    foreach ($params as $key => $value) {
        $$key = $value;
    }

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
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page,  $params),
        'footer' => renderTemplate('footer',  $params),

    ]);
}
