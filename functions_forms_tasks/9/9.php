
<?php
echo 'Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". 
Ввод текста реализовать с помощью формы.<br><br>';
$string1 = $_GET["string1"];
echo 'Исходная строка - ' . $string1 . '<br>';

echo 'Вариант 1 <br><br>';

function back_roll($string) {
    $len_string = strlen($string);
    $string2 = '';
    for ($i = $len_string; $i>=0; $i--){
        $string2 = $string2 . substr($string,$i,1);

    }
    echo $string2 . '<br><br>';
}
back_roll($string1);

echo 'Вариант 2 <br><br>';
function back_roll2($string) {
    $arr_string1 = str_split($string);
    $arr_string2 = array_reverse($arr_string1);
    //print_r($arr_string2);
    $string2 = implode($arr_string2);
    echo $string2 . '<br><br>';

}
back_roll2($string1);

