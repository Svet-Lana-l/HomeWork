<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Выведите столбец чисел от 1 до 100.<br><br>';
// for
echo 'Цикл for <br>';
for ($i = 1; $i <= 100; $i++) {
    echo $i . '<br>';
}
//do while
echo '<br>Цикл  do while <br>';
$i = 1;
do {
    echo $i . '<br>';
    $i++;
}
while ($i <= 100)

?>
</body>
</html>