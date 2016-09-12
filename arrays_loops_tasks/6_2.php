<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo ' Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru. <br> <br>';
// variant 2
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array_keys($arr);
$ru = array_values($arr);

echo 'массив $en <br>';
echo var_dump($en) . '<br>' ;
foreach ($en as $value) {
    echo $value . '<br>';
}
echo '<br>массив $ru <br>';
echo var_dump($ru) . '<br>';

foreach ($ru as $value) {
    echo $value . '<br>';
}

?>
</body>
</html>