<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.<br><br>';
$arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day = date('l');
foreach ($arr as $value){
    if ($value == $day ) {
        echo '<i>' . $value . '</i><br>';
    }
    else {
        echo $value . '<br>';
    }
}


?>
</body>
</html>