<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.<br><br>';
$array = array(2, 5, 9, 15, 0, 4);

foreach ($array as $value ){
   if ($value > 3 and $value < 10) {
       echo $value . '<br>' ;
   }
    }

?>
</body>
</html>