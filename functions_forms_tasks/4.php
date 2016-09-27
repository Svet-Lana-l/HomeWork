<?php
echo 'Написать функцию, которая выводит список файлов в заданной директории.
    Директория задается как параметр функции.<br><br>';
//$file = 'c:\xampp';
$file = __DIR__;
echo $file . '<br>';
$dir = array();
function dir_file($file) {
    $dir = scandir($file);
    echo '<pre>';
    print_r($dir);
    echo '</pre>';

}
dir_file($file);