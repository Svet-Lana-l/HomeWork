<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$arr = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
foreach ($arr as $key=>$value ){
    echo $key . ' - зарплата ' . $value . ' долларов. <br>';
}
?>
</body>
</html>