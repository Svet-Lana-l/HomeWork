<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран "Есть!", иначе выведите "Нет!". <br><br>';
$array = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);
foreach ($e as $number){
    $counter = 0;
    foreach ($array as $value ){
        if ($value == $number) {
            echo $number . ' - Есть! <br>'            ;
            $counter = 1;
            break;
        }
    }
    if ($counter == 0) {
        echo $number . ' - Нет! <br>' ;
    }
}


?>
</body>
</html>