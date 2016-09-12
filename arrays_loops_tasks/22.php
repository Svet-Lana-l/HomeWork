<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx<br><br>';
$x = 'xx';
$x_x = $x;
for ($i = 1; $i <= 5; $i++) {
    echo $x_x . '<br>';
    $x_x .= $x;
}
?>
</body>
</html>