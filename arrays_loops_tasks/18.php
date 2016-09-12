<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным. <br><br>';
$arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$weekend = array('Saturday', 'Sunday');
foreach ($arr as $value){
    if ($value == $weekend[0] or $value == $weekend[1]) {
        echo '<b>' . $value . '</b><br>';
    }
    else {
        echo $value . '<br>';
    }
}


?>
</body>
</html>