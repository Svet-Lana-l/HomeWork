<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Дан массив с элементами "html", "css", "php", "js", "jq". 
С помощью цикла foreach выведите эти слова в столбик.<br><br>';
$array = array('html', 'css', 'php', 'js', 'jq');
foreach ($array as $value ){
    echo $value . '<br>';
}
?>
</body>
</html>