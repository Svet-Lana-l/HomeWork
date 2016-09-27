
<?php
    echo 'Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
         которые есть и в первом и во втором поле ввода.    Реализацию это логики необходимо поместить 
         в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.<br><br>';
    $text1 = $_GET["text1"];
    $text2 = $_GET['text2'];
    function getCommonWords($text1, $text2) {
        // убираем знаки препинания
        $text1 = str_replace(',', '', $text1);
        $text1 = str_replace('.', '', $text1);
        $arr_text1 = explode(' ', $text1);
        // убираем знаки препинания
        $text2 = str_replace(',', '', $text2);
        $text2 = str_replace('.', '', $text2);
        $arr_text2 = explode(' ', $text2);
        // находим общие слова
        $arr_text = array_intersect($arr_text1, $arr_text2);
        $arr_text_unique = array_unique($arr_text);
        return $arr_text_unique;

    }
    $arr_text = getCommonWords($text1, $text2);
    print_r($arr_text);
    echo '<br><br> <b>General words in both texts - </b>';
    $text = implode($arr_text, ' ');
    echo $text . '<br><br>';