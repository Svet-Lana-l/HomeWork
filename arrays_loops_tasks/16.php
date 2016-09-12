<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3<br>
4, 5, 6<br>
7, 8, 9 <br><br>';
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value){
    if (($value % 3) == 0) {
        echo $value . '<br>';
    }
    else {
        echo $value . ',  ';
    }
}


?>
</body>
</html>