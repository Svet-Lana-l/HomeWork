
<?php
echo 'Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
    Текст должен вводиться с формы.<br><br>';

$text1 = $_GET["text1"];
$text1 = str_replace(',', '', $text1);
$text1 = str_replace('.', '', $text1);
echo 'Введенный техт : <br>' . $text1 , '<br>';


function unique_word($text1) {
    $arr_text1 = explode(' ', strtolower($text1));

    $arr_unique = array();
    foreach ($arr_text1 as $key => $value) {
        $arr_tmp=array($value);
        //print_r(array_intersect($arr_text1, $arr_tmp));

        if (count(array_intersect($arr_text1, $arr_tmp)) == 1) {
            array_push($arr_unique, $value);
        }

    }

echo '<pre>';
    print_r($arr_unique);
echo '</pre>';
echo 'Количество уникальных слов в тексте - ' . count($arr_unique). '<br>';
}
unique_word($text1);


