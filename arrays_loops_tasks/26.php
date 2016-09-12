<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<?php
echo 'Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.<br><br>';
$arr = array();
$product_even =1;

for ($i = 0; $i <= 20; $i++){
$arr[$i] =  rand(1, 100);

    if ($arr[$i] > 0 and ($i % 2 == 0)) {
        $product_even *= $arr[$i];
        //echo $i . ' - ' . $product_even . '<br>';
    }

}
echo 'Весь массив : <br>';
foreach ($arr as $key=>$value ){
    echo $key . '  -  ' . $value . '<br>';
    }
    //$f = gmp_strval($product_even);
echo '<br>Произведение четных элементов массива больших 0 - ' . $product_even . ' <br> ' ;

echo 'Нечетные элементы массива большиe 0 <br><br>';

foreach ($arr as $key=>$value ){
        if (($key % 2 > 0) and $value > 0){
        echo $key . '  -  ' . $value . '<br>';
    }
}
?>
</body>
</html>