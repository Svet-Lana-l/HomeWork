<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>functions-form-tasks-7</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
    <?php
        if (!$_GET){
             $_GET['status'] = 0;
        }
        if (is_file('post.txt')) {
            $arr_post_string = file('post.txt');

            echo '<table class="comment">';
            foreach ($arr_post_string as $value) {
                echo '<tr>';
                $arr_string = explode('|', $value);
                foreach ($arr_string as $value1){
                echo '<td>' . $value1 . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }

        if ($_GET['status'] == 1){

            echo '<br><br><b><i>Вы не указали ваше имя</i></b>';
        }
        if ($_GET['status'] == 2){
            echo '<br><br><b><i>Вы не ввели комментарий</i></b>';
        }
    ?>
    <form action="7.php" method="post">
        <br>
        <label for="name">Ваше имя: </label>
        <input type="text" name="name" id="name">
        <p><label for="form1">Ваш комментарий</label></p>
        <p><textarea name="text" id="form1" cols="100" rows="10"></textarea></p>
        <input type="submit" >
    </form>

</body>
</html>