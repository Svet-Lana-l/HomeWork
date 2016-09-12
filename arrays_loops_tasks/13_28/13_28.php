<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo '<h1>Таблица умножения. </h1><br><br>';

echo '<table class="table1">
    <tr>
        <td>';
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <=9; $j++){
                    echo $i . ' x ' . $j . ' = ' . $i*$j . '<br>';
                }
                echo '</td><td>';
            }
       echo '</td>
    </tr>
    <tr>
    <td>';
            for ($i = 6; $i <= 10; $i++) {
                for ($j = 1; $j <=9; $j++){
                    echo $i . ' x ' . $j . ' = ' . $i*$j . '<br>';
                }
                echo '</td><td>';
            }
       echo '</td>
    </tr>
</table>'

?>
</body>
</html>