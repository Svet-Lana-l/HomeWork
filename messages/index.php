<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<?php
// Запись в файл
// Открытие файла
if (is_file('file.txt')) {
$file = fopen('file.txt', 'c+');
// Данные файла
$text = fread($file, filesize('file.txt'));
// Закрыть файл
fclose($file);
}
else {
    $text= '';
}
?>

<div id="messages">
    <?php echo $text; ?>
</div>

<?php
    if (isset($_POST['fio']) && isset($_POST['email']) && isset($_POST['message'])) {
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Validation
        function validation_fio($fio){
            $val_fio = 0;
            $pattern_fio='/^[A-Za-zА-Яа-яЁёЇїЄєІіШшМмТтХхЮюЩщЭэГгРрьъ0-9\s\-\_\,\.]*$/';
            if (!preg_match($pattern_fio, $fio)) {
                $val_fio = 1;

            }
            return $val_fio;
        }
        $valid_fio = validation_fio($fio);
        function validation_email($email){
            $val_email = 0;
            $pattern_email='/^[A-Za-z0-9\-\_\.]{4,31}+(\@)+[A-Za-z\.]*$/';
            if (!preg_match($pattern_email, $email)) {
                $val_email = 1;

            }
            return $val_email;
        }
        $valid_email = validation_email($email);

        if ($message !== '' && $valid_fio == 0 && $valid_email == 0) {
            $message = str_replace(PHP_EOL, '<br>', $message);
            $string = $text;
            $string .= '<div class="user-message"><div class="user-head">';
            $string .= '<div class="user-fio">' . $fio . '</div>';
            $string .= '<div class="user-email">Email: ' . $email . '</div></div>';
            $string .= '<div class="user-text">' . $message . '</div>';
            $string .= '</div>';

            // Открытие файла
            $file = fopen('file.txt', 'w+');
            // Запись файла
            fwrite($file, $string);
            // Закрыть файл
            fclose($file);
            $value_fio ='';
        }
        elseif ($valid_fio == 1) {
            echo '<p class="error_input">ФИО содержит недопустимые символы.</p>';
            $value_message = $message;
            $value_email = $email;
            $value_fio ='';
        }
        elseif ($valid_email == 1) {
            echo '<p class="error_input">Ошибки в написании Email. </p>>';
            $value_message = $message;
            $value_fio = $fio;
            $value_email ='';
        }
    }
?>

<?php if (!isset($fio) && !isset($email) && !isset($message) || ($valid_fio == 1 || $valid_email == 1)):
    if (!isset($value_fio)) {
    $value_fio = '';
    }
    if (!isset($value_email)) {
        $value_email = '';
    }
    if (!isset($value_message)) {
        $value_message = '';
    }
?>

    <div class="form">
        <form id="user-form" action="#" method="post">
            <i>Ваше сообщение :</i>
            <br><br>
            <?php echo '<input type="text" name="fio" required placeholder="Введите свое ФИО" 
                value="' . $value_fio . '"/>'; ?>
            <?php echo '<input type="email" name="email" required placeholder="Введите свой email"
                   value="' . $value_email . '"/>'; ?>
            <?php echo '<textarea name="message" rows="5" required placeholder="Введите свое сообщение"
                      " >' . $value_message . '</textarea>'; ?>
            <input type="submit" value="Send">
        </form>
    </div>
<?php else:

    ?>
    <div class="congratulations">
        <p>Спасибо за Ваше письмо!</p>
        <a href="index.php">Вернуться к вводу сообщений</a>
    </div>
<?php endif; ?>
</body>
</html>