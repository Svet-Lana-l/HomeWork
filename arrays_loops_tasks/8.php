<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$string = '';
foreach ($array as $value ){
   $string .= $value;
    }
echo $string . '<br>' ;
?>
</body>
</html>