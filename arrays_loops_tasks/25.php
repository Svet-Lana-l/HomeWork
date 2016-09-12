<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<?php
echo 'Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.<br><br>';
$arr = array();
$arr_min =getrandmax();
$arr_max = 0;
$key_min = 0;
$key_max = 0;
for ($i = 0; $i <= 20; $i++){
$arr[$i] =  rand();
    if ($arr[$i] < $arr_min) {
        $arr_min = $arr[$i];
        $key_min = $i;
       // echo 'Min-number ' . $arr_min . ' key ' . $key_min . '<br>';
    }
    if ($arr[$i] > $arr_max) {
        $arr_max = $arr[$i];
        $key_max = $i;
       // echo 'Max-number ' . $arr_max . ' key ' . $key_max . '<br>';
    }
}

foreach ($arr as $key=>$value ){
    echo $key . '  -  ' . $value . '<br>';
    }
echo '<br>Min-number ' . $arr_min . ' key ' . $key_min . '<br>';
echo 'Max-number ' . $arr_max . ' key ' . $key_max . '<br><br>';
$arr[$key_min] = $arr_max;
$arr[$key_max] = $arr_min;
foreach ($arr as $key=>$value ){
    echo $key . '  -  ' . $value . '<br>';
}
?>
</body>
</html>