<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<?php
echo 'Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов
 в таблице. Есть список цветов, в массиве: $colors = array(\'red\',\'yellow\',\'blue\',\'gray\',\'maroon\',\'brown\',
 \'green\'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, 
 в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно 
 находиться случайное число.<br><br>';
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row = 5;
$cols = 7;
$arr = array();
for ($i = 0; $i <= $row; $i++){
    for ($j = 0; $j <= $cols; $j++) {
        $arr[$i][$j] = rand();
    }
}
echo '<table class="table1">';
    for ($i = 0; $i <= $row; $i++){
        echo '<tr>';
        for ($j = 0; $j <= $cols; $j++) {
            $n_color = array_rand($colors);
            echo '<td class="cell_' . $n_color . '">' . $arr[$i][$j] . '</td>';

        }
        echo '</tr>';
    }
echo '</table>';

?>
</body>
</html>