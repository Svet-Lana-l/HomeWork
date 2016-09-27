
<?php
echo 'Есть строка $string = яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
    груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня 
    яблоко вишня вишня черешня черешня груша яблоко черешня вишня;    <br>
    Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения 
    количества:<br>
    Пример вывода:<br>
    яблоко – 12<br>
    черешня – 8<br>
    груша – 5<br>
    слива - 3<br><br><br>';

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко
 черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня
 вишня черешня черешня груша яблоко черешня вишня';

echo '<br>Введенный техт : <br>' . $string , '<br><br>';


function count_word($string)
{
    $arr_string = explode(' ', $string);
    //echo '<pre>';
      // print_r($arr_string);
    //echo '</pre>';
    foreach ($arr_string as $key => $value) {
        $arr_string[$key] = trim($value);
    }

    $arr_unique = array_unique($arr_string);
    $arr_word = array_flip($arr_unique);
    foreach ($arr_word as $key => $value) {
        $arr_word[$key] = 0;
    }

    foreach ($arr_string as $key => $value){
        foreach ($arr_word as $key1 => $value1) {
            if ($value == $key1){
                $arr_word[$key1]++;
                break;
            }

        }

    }
    //echo '<pre>';
      //  print_r($arr_word);
    //echo '</pre>';
    foreach ($arr_word as $key => $value) {
        echo $key . ' - ' . $value . '<br>';

    }
}
count_word($string);

