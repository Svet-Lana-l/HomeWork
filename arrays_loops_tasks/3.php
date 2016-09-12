<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов
 элементов этого массива. Результат запишите переменную $result.<br><br>';
$array = array(26, 17, 136, 12, 79, 15);
$result = 0;
$result1 = 0;
foreach ($array as $value ){
    $result += $value ** 2;
    $result1 += $value * $value;
}
echo '$result = ' .  $result;
?>
</body>
</html>