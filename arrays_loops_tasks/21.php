<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555<br><br>';

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <=$i; $j++) {
        echo $i;
    }
    echo  '<br>';
}
?>
</body>
</html>