<?php
/* Задание 1 */
$a = rand(-100, 100);
$b = rand(-100, 100);

if ($a >= 0 && $b >= 0) {
    $result = 'Оба числа положительные';
} elseif ($a < 0 && $b < 0) {
    $result = 'Оба числа отрицательные';
} else {
    $result = 'У чисел разный знак';
}

/* Задание 2 */
$с = rand(0, 15);
function out($d)
{
    if ($d < 16) {
        $res2 = $d . " " . out($d + 1);
        return $res2;
    } /* else {
return $res2;
} */
};
$res3 = out($с);

/* Задание 3-4 */
function plus($a, $b)
{
    return $a + $b;
}
function minus($a, $b)
{
    return $a - $b;
}
function mult($a, $b)
{
    return $a * $b;
}
function divisor($a, $b)
{
    return ($b != 0) ? $a / $b : 'Нельзя делить на ноль';
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'plus':
            return plus($arg1, $arg2);
            break;
        case 'minus':
            return minus($arg1, $arg2);
            break;
        case 'mult':
            return mult($arg1, $arg2);
            break;
        case 'divide':
            return divisor($arg1, $arg2);
            break;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h2>Задание 1</h2>
	<p>На входе значение а = <?=$a?>, и b = <?=$b?>. <?=$result?>
	</p>
	<h2>Задание 2</h2>
	<p>Стартовое число = <?=$с?>. Вывод - <?=$res3?></p>
	<h2>Задание 3</h2>
	<p>Выберите значения и операцию</p>
	<form action="">
		<input type="number" name='arg1' value="<?php echo $_GET['arg1']; ?>">
		<input type="number" name='arg2' value="<?php echo $_GET['arg2']; ?>">
		<select name="operation" id="">
			<option value="plus" <?php echo $_GET['operation'] == 'plus' ? 'selected' : ''; ?>>Сложить</option>
			<option value="minus" <?php echo $_GET['operation'] == 'minus' ? 'selected' : ''; ?>>Вычесть</option>
			<option value="mult" <?php echo $_GET['operation'] == 'mult' ? 'selected' : ''; ?>>Умножить</option>
			<option value="divide" <?php echo $_GET['operation'] == 'divide' ? 'selected' : ''; ?>>Разделить</option>
		</select>
		<input type="submit">
	</form>
	<p>Результат: <?php echo mathOperation($_GET['arg1'], $_GET['arg2'], $_GET['operation']) ?></p>


</body>

</html>