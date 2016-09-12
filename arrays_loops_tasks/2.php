<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
 Запишите ее в переменную $result.<br><br>';
$array = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($array as $value ){
    $result += $value;
    }
echo '$result = ' . $result ;
?>
</body>
</html>