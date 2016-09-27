
<?php
//echo 'Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.Реализовать проверку на наличие в тексте запрещенных
// слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из
// комментария всех тегов, кроме тега <b>;.<br><br>';


$file = 'post.txt';
$bad_word = 0;
$arr_bad_word = array('word1','word2','word3','word4','word5','word6','слово1','слово2','слово3','слово4');

if (!$_POST['name']) {
    header('Location: index.php?status=1');
}
elseif (!$_POST['text']) {
    header('Location: index.php?status=2');
}

if ($_POST['name'] and $_POST['text']) {
    $p_text =  str_replace(PHP_EOL,  ' ', $_POST['text']);

    // удаление из комментария всех тегов, кроме тега <b>
    $first_symbol = 0;
    while (strpos($p_text, '<', $first_symbol) !== false){
        $symbol_less = strpos($p_text, '<', $first_symbol);
        $symbol_greater = strpos($p_text, '>', $first_symbol);

        if (substr($p_text, $symbol_greater-1, 1) != 'b') {
            $p_text = substr_replace($p_text, '', $symbol_less, $symbol_greater-$symbol_less+1 );
        }
        else {
            $first_symbol = $symbol_greater + 1;
        }
    }
    // проверкa на наличие в тексте запрещенных слов, матов
    foreach ($arr_bad_word as $value) {
        if (stristr($p_text, $value) != false){
            header('Location: index.php?status=3');
            $bad_word = 1;
            break ;
        }
    }
    //запись комментариев в файл
    if ($bad_word == 0){
        $arr_post = array($_POST['name'], '|',  date('d M Y H:i'), '|', $p_text . PHP_EOL,  );
        file_put_contents($file, $arr_post, FILE_APPEND);
        header('Location: index.php?status=0');
    }
}
