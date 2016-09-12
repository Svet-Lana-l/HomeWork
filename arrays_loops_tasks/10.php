<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Выведите столбец чисел от 11 до 33.<br><br>';
// for
echo 'Цикл for <br>';
for ($i = 11; $i <= 33; $i++) {
    echo $i . '<br>';
}
//do while
echo '<br>Цикл  do while <br>';
$i = 11;
do {
    echo $i . '<br>';
    $i++;
}
while ($i <= 33)

?>
</body>
</html>