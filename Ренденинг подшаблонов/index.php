<?php

function renderTemplate($page, $content = '', $menu = '', $contacts = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

$content = renderTemplate('about');
$menu = renderTemplate('menu');
$contacts = renderTemplate('contacts');

echo renderTemplate('layout', $content, $menu, $contacts);