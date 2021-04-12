<hr>
<p>Задачки урока 3</p>
<span>Задача 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</span> <br>

<?php $i = 0;
while ($i <= 100) {
    if ($i % 3 == 0) {
        echo $i++ . ', ';
    } else {
        $i++;
    }
}
?>
<br><br>
<span>Задача 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: <br>
    0 – ноль. <br>
    1 – нечетное число.</span> <br><br>

<?php
function numberOutput($start, $end)
{
    do {
        switch ($start % 2) {
            case 0:
                echo $start . "– четное число.<br>\n";
                break;
            default:
                echo $start . "– нечетное число.<br>\n";
                break;
        }
        $start++;
    } while ($start <= $end);
}
/* Можно было бы написать через if вместо switch, но решено было потренировать эту версию.   */
numberOutput(1, 10);
?>

<br><br>
<span>Задача 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, </span> <br><br>

<?php
$listArray = array(
    'Тульская область' => array(
        'Алексин',
        'Богородицк',
        'Венёв',
        'Ефремов',
    ),
    'Кемеровская область' => array(
        'Гурьевск',
        'Кемерово',
        'Калтан',
        'Берёзовский',
    ),
    'Липецкая область' => array(
        'Грязи',
        'Елец',
        'Задонск',
        'Липецк',
    ),
);

foreach ($listArray as $key => $value) {
    echo "<b>" . $key . ": </b><br>";
    $substring = '';
    foreach ($value as $valueIns) {
        $substring .= $valueIns . ", ";
    }
    $ready = rtrim($substring, ', ');
    echo $substring ?  $ready . ".<br>" : '';
}
?>
<br><br>
<span>Теперь выведем только города на букву К</span>
<br><br>
<?php
    foreach ($listArray as $key => $value) {
        echo "<b>" . $key . ": </b><br>";
        $substring = '';
        foreach ($value as $valueIns) {
            $checkLetter = 'К';
            if (mb_substr($valueIns, 0,1) == $checkLetter) {
            $substring .= $valueIns . ", ";
            }
        }
        $ready = rtrim($substring, ', ');
        echo $substring ?  $ready . ".<br>" : '';
    }
?>

<br><br>
<span>Задача 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания.
Написать функцию транслитерации строк. Она должна учитывать и заглавные буквы. </span> <br><br>

<?php
$alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
		];

function transliteration($text, $alfabet)
{
    $preparedText = mb_str_split($text);
    $transformedText = '';
    foreach ($preparedText as $value) {
        $isUpper = 0;
        if (mb_strtolower($value) != $value) {
            $value = mb_strtolower($value);
            $isUpper = 1;
        }
        if ($alfabet[$value]) {
            $newLetter = $alfabet[$value];
            if ($isUpper == 1) {
                $newLetter = strtoupper($newLetter);
            }
        } else {
            $newLetter = $value;
        }
        $transformedText .= $newLetter;
    }
    echo $transformedText;
}

function spacer($text) {
    return str_replace(' ', '_', $text);
}

transliteration('Съешь еще этих МЯГКИХ Французских БуЛоК', $alfabet);
echo "<br><br>". spacer('Мама мыла раму');

?>
<br><br>
<span><b>И объеденим функции в одну</b></span>
<br><br>
<?php
function urlPrepare($text, $alfabet) {
    transliteration(spacer($text), $alfabet);
}

urlPrepare ('Ну что, потестим?', $alfabet);

?>