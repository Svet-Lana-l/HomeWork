<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную $num. <br><br>';

$n = 1000;
$num = 0;
$division = $n;
echo $division . '<br>';
do {
    $num++;
    $division = $division / 2;
    echo $division . '<br>';
}
while ($division > 50);
echo '<br>Результат - ' . $division . '<br>';
echo 'Количество иттераций - ' . $num ;

?>
</body>
</html>