<?php 
$menuArr = array(
    'Главная' => 'index.php',
    'Каталог' => '/?page=catalog',
    'Контакты' => '/?page=contacts',
    'Пункт меню' => /* array(
        'Подменю 1' => '/?page=submenu1',
        'Подменю 2' =>  */'/?page=submenu2'
    /* )  Для подменю фокус пока не удался, пусть полежит заготовка*/
);

function menuConstructor($array) {
    echo '<ul>';
    foreach($array as $key => $value):?>
        <li><a href="<?=$value?>"><?=$key?></a></li>
    <?php endforeach;
     echo '</ul>';
}
?>
<header>Купи одну настолку, и вторую тоже купи</header>

<?php menuConstructor($menuArr); ?>



