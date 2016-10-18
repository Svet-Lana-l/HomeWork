<?php
//if ($_POST) {
  //  echo $_SERVER['REQUEST_URI'];
    // header('Location:'.$_SERVER['REQUEST_URI']);
//}
setcookie('dir_t');
require_once 'file_lib.php';

//$dir_root = __DIR__;
define('df' , DIRECTORY_SEPARATOR);

if (isset($_GET['dir'])) {
    if (is_dir($_GET['dir'])) {
        $dir_c = $_GET['dir'];
    }
    else{
        if (!isset($dir_c)){
            $dir_c = __DIR__;
        }
    }
}
elseif (isset($_POST['dir'])) {
    if (is_dir($_POST['dir'])) {
        $dir_c = $_POST['dir'];
    }
    else{
        if (!isset($dir_c)) {
            $dir_c = __DIR__;
        }
    }
}
elseif (isset($_COOKIE['dir_t'])) {
    if (is_dir($_COOKIE['dir_t'])) {
        $dir_c = $_COOKIE['dir_t'];
    }
    else{
        if (!isset($dir_c)) {
            $dir_c = __DIR__;
        }
    }
}
else {
    if ((!isset($dir_c)) ){
        $dir_c = __DIR__;
    }
}

$arr_dir = scandir($dir_c);
asort($arr_dir);
$arr_d = array();
foreach ($arr_dir as $key=>$value){
    $key1 = if_file_dir($value, $dir_c) . $key;
    $arr_d[$key1] = $value;
}
ksort($arr_d);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>File_Manager</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CodeMirror/cm/theme/ambiance.css">
    <link rel="stylesheet" type="text/css" href="CodeMirror/cm/theme/solarized.css">

    <script src="CodeMirror/cm/lib/codemirror-compressed.js"></script>
    <script src="CodeMirror/cm/mode/php-compressed.js"></script>
    <script src="CodeMirror/cm/mode/htmlmixed-compressed.js"></script>
    <script src="CodeMirror/cm/mode/javascript-compressed.js"></script>
    <link rel="stylesheet" href="CodeMirror/cm/lib/codemirror.css">
    <link type='text/css' rel='stylesheet' href='css/style.css'/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</head

<body>
<h1>File-Manager</h1>
    <div class="manager-all">
        <section id="section1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 decor">

                        <?php get_dir($arr_d, $dir_c);?>

                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="edit">

                    <?php
                        if (isset($_GET['name'])) {
                            $text_file = htmlspecialchars(file_get_contents($_GET['name']));
                            $name_file = $_GET['name'];
                    ?>
                            <form action="file_lib.php" method="post">
                                <label for="code">Редактируем файл - <?php echo $name_file;?></label>
                                <textarea name="file_text" id="code" class="CodeMirror"><?php echo $text_file; ?></textarea>
                                <input type="hidden" name="name" value="<?php echo $name_file;?>">
                                <input type="hidden" name="dir" value="<?php echo $dir_c;?>">
                                <input type="submit" value="Save">
                            </form>
                            <div id="post_save">
                            <?php
                          }
                             ?>

                             </div>
                </div>
            </div>
        </section>
       <section id="section2">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>
        </section>
    </div>
<script>
    if (document.getElementById("code")) {
        var editor = CodeMirror.fromTextArea(document.getElementById("code"),  {
            lineNumbers: true,               // показывать номера строк
            matchBrackets: true,             // подсвечивать парные скобки
            mode: 'application/x-httpd-php', // стиль подсветки
            //mode: 'php',
            //theme: 'ambiance',
            indentUnit: 4,                    // размер табуляции
            scrollbarStyle: 'native'
        });

    }

</script>
</body>
</html>
