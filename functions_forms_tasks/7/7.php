
<?php
//echo 'Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
//Все добавленные комментарии выводятся над текстовым полем.<br><br>';


$file = 'post.txt';

if ($_POST['name'] and $_POST['text']) {
    $p_text =  str_replace(PHP_EOL,  ' ', $_POST['text']);
    $arr_post = array($_POST['name'], '|',  date('d M Y H:i'), '|', $p_text . PHP_EOL,  );
    file_put_contents($file, $arr_post, FILE_APPEND);
    header('Location: index.php?status=0');
}
elseif (!$_POST['name']) {
    header('Location: index.php?status=1');
}
elseif (!$_POST['text']) {
    header('Location: index.php?status=2');
}