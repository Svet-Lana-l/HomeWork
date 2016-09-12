
<?php
echo 'Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.<br><br>';

/*$number = 23458;*/
$n = $_GET["number"];
echo 'Введенное число - ' . $n . '<br>';
$count = 0;
$arr_number=array();
while($n > 0) {
    $arr_number[$count] = $n % 10;
    $n = intdiv($n, 10 );
    $count++;
   // echo $n . '  ' . $arr_number[$count-1] . '<br>';
}
echo 'Variant 1 - foreach <br>';
$sum = 0;
foreach ($arr_number as $value) {
    $sum += $value;
}
echo 'Сумма цифр введенного числа - ' . $sum . '<br>';
echo 'Variant 2 - array_sum() <br>';
$sum1 = array_sum($arr_number);
echo 'Сумма цифр введенного числа - ' . $sum1;

