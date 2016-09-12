
<?php
echo 'Вам нужно разработать программу, которая считала бы количество вхождений
какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.<br><br>';

/*$number = 23458;*/
$n1 = $_GET["number1"];
$n2 = $_GET["number2"];
echo 'Введенное число - ' . $n1 . '<br>';
echo 'Введенная цифра - ' . $n2 . '<br>';
$count = 0;
$arr_number=array();
while($n1 > 0) {
    $arr_number[$count] = $n1 - floor($n1/10)*10;
    $n1 = floor($n1/10);
    $count++;
   //echo $n1 . '  ' . $arr_number[$count-1] . '<br>';
}
echo '<br>Variant 1 - foreach <br>';
$count = 0;
foreach ($arr_number as $value) {
    if ($value == $n2){
      $count++ ;
    }
 }
echo 'Цифра ' . $n2 . ' встречается в числе ' . $_GET["number1"] . ' - ' . $count . ' раз <br>';

 echo '<br>Variant 2  - array_keys()<br>';
 $arr_search = array_keys($arr_number, $n2);

echo 'Цифра ' . $n2 . ' встречается в числе ' . $_GET["number1"] . ' - ' . count($arr_search) . ' раз';

