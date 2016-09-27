<!DOCTYPE html>
<html lang="ru">
<head>
    <title>functions-form-tasks-6</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
    <form action="6.php" method="post" enctype="multipart/form-data">
        <p><label for="form1">Выберите фото в галерею</label>
        <input name="photo[]" id="form1" type="file" placeholder="Выберите файлы" multiple></p>
         <input type="submit" >
    </form>

</body>
</html>