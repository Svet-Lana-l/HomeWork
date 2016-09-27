
<?php
echo 'Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, 
    что каждое новое предложение начиняется с большой буквы.
    Пример:
    Входная строка: \'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты 
    не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.\';
    Строка, возвращенная функцией :  \'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
     все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.<br><br>';
//echo setlocale(LC_CTYPE, 'ru_RU.UTF-8');
//echo setlocale(LC_ALL, 0);
$text1 = $_GET["text1"];

echo '<br>Введенный техт : <br>' . $text1 , '<br>';


function upper_first_word($text1)
{
    $arr_text1 = explode('.', $text1);
    //echo '<pre>';
    //print_r($arr_text1);
    //echo '</pre>';

    foreach ($arr_text1 as $key => $value) {
        $word = explode(' ',$value);

        foreach ($word as $key1 => $value1) {
            if ($value1 != ''){
               $word[$key1] = mb_strtoupper($value1);
                break;
            }
        }
        $arr_text1[$key] = implode(' ', $word);
        //echo '<br>';
    }

    $text2 = implode('.', $arr_text1);
    echo '<br>Возвращаемый текст : <br>';
    echo $text2;
}

upper_first_word($text1);


