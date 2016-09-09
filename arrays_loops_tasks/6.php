<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key=>$value ){
    $en[] = $key;
    $ru[] = $value;

}
echo var_dump($en) . '<br>' ;
echo var_dump($ru) . '<br>';
foreach ($en as $value) {
    echo $value . '<br>';
}
foreach ($ru as $value) {
    echo $value . '<br>';
}

?>
</body>
</html>