<!DOCTYPE html>
<html>
<head>
    <title>A loop of your own</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
//Add while loop below
    $color_count = 0;
    $flip_count = 0;
    $color = array('green','yellow','blue');
    $flip_color = rand(1,3);
    echo '<p class="' . $color[$flip_color - 1] . '">A</p> ';
    while ($color_count < 3) {
        $flip = rand(1,3);
        $flip_count ++;
        echo '<p class="' . $color[$flip - 1] . '">A</p> ';
        if ($flip == $flip_color) {
            $color_count ++;
        }
        else {
            $color_count = 0;
            $flip_color = $flip;
        }
    }
    echo 'Count of flip ' . $flip_count;
?>
</body>
</html>