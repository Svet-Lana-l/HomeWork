
<?php

echo 'Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
    Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.<br><br>';

$n = $_GET["number"];
echo '<br><br>Введенное число - ' . $n;
$text = file_get_contents('text_3.txt');
mb_detect_order('windows-1251, utf-8');
echo '<br><br>';
if (mb_detect_encoding($text) == 'Windows-1251'){
    $text = iconv('windows-1251', 'utf-8', $text);
}
echo $text . '<br>';

function n_word_delete($text, $n) {
    $arr_text = explode(' ', $text);
    $del = array();
    $count_del = 0;
    foreach ($arr_text as $key => $value) {
        $value = str_replace(',', '', $value);
        $value = str_replace('.', '', $value);
        $len= iconv_strlen($value, 'utf-8');
        if ($len > $n) {
            $del[] = $value;
            // удаление слова
            $dd = array_splice($arr_text, $key-$count_del, 1);
            $count_del++;
            print_r($dd);
            echo ' - длина слова ' . $len;
            echo '<br><br>';

        }
    }
    echo 'DELETE WORD - <br><br>';
    echo '<pre>';
        var_dump($del) ;
    echo '</pre>';
    $text1 = implode(' ', $arr_text);
    return $text1;


}
$text1 = n_word_delete($text, $n);
echo '<br><br>';
echo $text1 . '<br>';
//$text = iconv('utf-8', 'windows-1251', $text);

$file_txt = fopen('text_3.txt', 'w');
fwrite($file_txt, $text1);
fclose($file_txt);
