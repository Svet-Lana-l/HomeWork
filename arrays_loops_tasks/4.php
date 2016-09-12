<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.<br>
$arr = array(\'green\'=>\'зеленый\', \'red\'=>\'красный\',\'blue\'=>\'голубой\');<br><br>';
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$value ){
    echo $key . '<br>';
}
echo '<br>';
foreach ($arr as $key=>$value ){
    echo $value . '<br>';
}
?>
</body>
</html>