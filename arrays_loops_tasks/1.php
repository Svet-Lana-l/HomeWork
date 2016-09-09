<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$array = array('html', 'css', 'php', 'js', 'jq');
foreach ($array as $value ){
    echo $value . '<br>';
}
?>
</body>
</html>