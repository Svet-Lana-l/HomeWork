<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx<br><br>';
$x = 'x';
$x_x = $x;
for ($i = 1; $i <= 20; $i++) {
    echo $x_x . '<br>';
    $x_x .= $x;
}
?>
</body>
</html>