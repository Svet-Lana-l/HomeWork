
<?php
echo 'Создать страницу, на которой можно загрузить несколько фотографий в галерею. 
    Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.<br><br>';
//$photo = $_POST['photo'];
echo '<pre>';
//print_r($_POST);
//print_r($_GET);
//print_r($_FILES);
//print_r($_REQUEST);
//print_r($_SERVER);
echo '</pre>';

$ds = DIRECTORY_SEPARATOR;
$dir = __DIR__;
$dir_gallery = $dir . $ds . 'gallery';
if (!is_dir($dir_gallery)){
    mkdir($dir_gallery);
}

if ($_FILES && isset($_FILES['photo'])) {
    foreach ($_FILES['photo']['tmp_name'] as $key => $value) {
    move_uploaded_file($value , $dir_gallery . $ds . $_FILES['photo']['name'][$key]);
    }
}
$gallery = scandir($dir_gallery);
echo '<pre>';
//print_r($gallery);
echo '</pre>';
$count_gallery = count($gallery);
$row = ceil($count_gallery / 3);

echo 'Фото из папки gallery <br><br>';
echo '<table>';
$count_photo = 2;
for ($i = 1; $i <= $row; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 3; $j++){
        echo '<td><img src="' . 'gallery' . $ds . $gallery[$count_photo] . '" width="300" ></td>';
        $count_photo++;
        if ($count_photo == $count_gallery) {
            echo '</tr>';
            break 2;
        }
    }
    echo '</tr>';
}
echo '</table>';