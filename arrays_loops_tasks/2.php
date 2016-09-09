<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$array = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($array as $value ){
    $result += $value;
    }
echo $result ;
?>
</body>
</html>