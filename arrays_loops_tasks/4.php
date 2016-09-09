<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$value ){
    echo $key . '<br>';
}
foreach ($arr as $key=>$value ){
    echo $value . '<br>';
}
?>
</body>
</html>