
<?php
echo 'Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
    Реализовать с помощью функции.<br><br>';
$text1 = $_GET["text1"];
$text1 = str_replace(',', '', $text1);
$text1 = str_replace('.', '', $text1);

echo 'Вариант 1 <br><br>';
function top3_long_var1($text1) {
    $arr_text1 = explode(' ', $text1);
    $len1 = 0;
    $key1 = 0;
    foreach ($arr_text1 as $key => $value) {
        $len= strlen($value);
        if ($len1 < $len) {
            $len1 = $len;
            $key1 = $key;
        }
    }

    echo $arr_text1[$key1] . '  : длина - ' . $len1 . '<br><br>';

    $len2 = 0;
    $key2 = 0;
    foreach ($arr_text1 as $key => $value) {
        $len= strlen($value);
        if ($len2 < $len) {
            if ($len <= $len1 and $value != $arr_text1[$key1]) {
            $len2 = $len;
            $key2 = $key;
            }
        }
    }
    echo $arr_text1[$key2] . '  : длина - ' . $len2 . '<br><br>';

    $len3 = 0;
    $key3 = 0;
    foreach ($arr_text1 as $key => $value) {
        $len= strlen($value);
        if ($len3 < $len) {
            if (($len <= $len1 and $value != $arr_text1[$key1]) and ($len <= $len2 and $value != $arr_text1[$key2])) {
                $len3 = $len;
                $key3 = $key;
            }
        }
    }
    echo $arr_text1[$key3] . '  : длина - ' . $len3 . '<br><br>';


}
top3_long_var1($text1);

echo 'Вариант 2 <br><br>';
function top3_long_var2($text1) {
    $arr_text1 = explode(' ', $text1);
    $arr_len = array();
    foreach ($arr_text1 as $key => $value) {
        $len= strlen($value);
        $arr_len[$value] = $len;
    }
    arsort($arr_len);

    $arr_top3 = array_slice($arr_len, 0, 3);
    foreach ($arr_top3 as $key => $value) {
        echo $key . '  : длина - ' . $value . '<br><br>';
    }

}
top3_long_var2($text1);

