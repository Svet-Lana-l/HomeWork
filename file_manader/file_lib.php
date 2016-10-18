<?php
/**
 * Created by PhpStorm.
 * User: Sveta
 * Date: 07.10.2016
 * Time: 22:04
 */


echo '<br>';

if (isset($_POST['file_text'])) {
    save_file();
}
function if_file_dir($files, $dir_c){

    $ident_f = '';
    if ($files == '.') {
        $ident_f = 'a';
    }
    elseif ($files == '..') {
        $ident_f = 'b';
    }
    elseif (!file_exists($dir_c . df. $files) or !is_writable($dir_c . df. $files)
        or !is_readable($dir_c . df. $files)) {
        $ident_f = 'h';
    }
    elseif (is_file($dir_c . df. $files)){
        $ident_f = 'f';
    }
    elseif (is_dir($dir_c . df. $files)) {
        $ident_f = 'd';
    }
    elseif (is_link($dir_c . df. $files)) {
        $ident_f = 'l';
    }


    else {
        $ident_f = 'h';
    }

    return $ident_f;
}

function get_dir($arr_dir, $dir_c) {

    $stroka = '';
    echo '<table>';
    foreach ($arr_dir as $files) {

        switch (if_file_dir($files, $dir_c)) {

            case 'a':
                $stroka ='   ' . $files;
                break;
            case 'b':
                $dir_new = dirname($dir_c);
                $stroka = '<a href=?dir=' . $dir_new . '><img src="img/arrow_up.png" class="icon"> ' . $files . '</a>';
                break;
            case 'd':
                $dir_new = trim($dir_c) . df . trim($files);
                $stroka = '<a class="active_file" href=?dir=' . $dir_new . '> 
                <img src="img/folder.png" class="icon"> ' . $files . '</a>';
                break;
            case 'f':
                $dir_new = trim($dir_c) . df . trim($files);
                $stroka = '<a class="active_file" href="?name=' . $dir_new .'&dir=' . $dir_c . '#edit">
                <img src="img/document.png" class="icon"> ' . $files. '</a>';
                break;
            case 'h':
            case 'l':
                $dir_new = $dir_c;
                $stroka = '<a class="active_file" href=?dir=' . $dir_new . '> 
                <img src="img/folder-locked.png" class="icon"> ' . $files . '</a>';
                break;

        }
        echo '<tr><td>' . $stroka . '</td></tr>';
    }
    echo '</table>';
}

function save_file(){

    if (isset($_POST['name']) and isset($_POST['file_text'])) {
        file_put_contents($_POST['name'], htmlspecialchars_decode($_POST['file_text']));
    }
    setcookie('dir_t', dirname($_POST['name']));

    header('Location:index.php');
}
