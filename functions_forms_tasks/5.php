<?php
echo 'Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
    Директория и искомое слово задаются как параметры функции.<br><br>';
//$file = 'c:\xampp\htdocs\sveta.name\loop';
$file = __DIR__;
$word = 'false';
echo 'Исходная дирректория - ' . $file . '<br>';
echo 'Искомое слово - ' . $word . '<br>';
$dir = array();
function dir_file($file , $word) {
    $dir = scandir($file);
    echo '<pre>';
    print_r($dir);
    echo '</pre>';
    $dir_word = array();
    foreach ($dir as $key => $value) {
        if (strlen($value ) > 2 and strstr($value, '.') != false) {
            $h_file = fopen($file . '\\' .  $value, 'r');
            //echo $value . '<br>';
            $text = fread($h_file, filesize($file . '\\' .  $value));
            //echo $text . '<br>';
            if (strstr($text, $word) != false) {
                $dir_word[] = $value;
            }
            fclose($h_file);
        }
    }
    echo 'Файлы с искомым словом - <pre>';
    print_r($dir_word);
    echo '</pre>';
}
dir_file($file,$word);