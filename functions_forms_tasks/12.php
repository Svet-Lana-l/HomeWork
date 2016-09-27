
<?php
echo 'Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что
    предложения идут в обратном порядке.    Пример:
    Входная строка:  \'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты 
    не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.\';<br><br>
    Строка, возвращенная функцией :  \'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. 
    А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.<br><br>';
//echo setlocale(LC_CTYPE, 'ru_RU.UTF-8');
//echo setlocale(LC_ALL, 0);
$string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты 
    не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

echo '<br>Введенный техт : <br>' . $string , '<br>';

echo 'Вариант 1 <br><br>';
function back_roll_sentence($string)
{
    $arr_string = explode('.', $string);
    echo '<pre>';
        print_r($arr_string);
    echo '</pre>';
    $string1 = '';
    $len_arr = count($arr_string);

    for ($i = $len_arr-1; $i >= 0; $i--) {
        if ($arr_string[$i] != ''){
        $string1 .= $arr_string[$i] . '.';
        }

    }
       echo '<br>Обработанный техт : <br>' . $string1;
}

back_roll_sentence($string);

echo '<br><br>Вариант 2 <br><br>';
function back_roll_sentence2($string)
{
    $arr_string = explode('.', $string);
    echo '<pre>';
        print_r($arr_string);
    echo '</pre>';
    $arr_reserve = array_reverse($arr_string);
    echo '<pre>';
        print_r($arr_reserve);
    echo '</pre>';
    $string1 = implode('.', $arr_reserve);
    $string1 = ltrim($string1, '.');
    echo '<br>Обработанный техт : <br>' . $string1 . '.';
}

back_roll_sentence2($string);