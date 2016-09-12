<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10. <br><br>';
$arr = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;
foreach ($arr as $value){
    $count++;
}
echo 'Количество элементов массива - ' . $count;

?>
</body>
</html>