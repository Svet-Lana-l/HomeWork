<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
echo 'Выведите столбец четных чисел в промежутке от нуля до 100.<br><br>';
echo 'even number <br>';
// with if
echo 'with if <br>';
for ($i = 0; $i <= 100; $i++) {
   if (($i % 2) == 0){
    echo $i . '<br>';
   }
}
//without if
echo '<br> without if <br>';
for ($i = 0; $i <= 100; $i = $i+2) {
        echo $i . '<br>';
 }

?>
</body>
</html>