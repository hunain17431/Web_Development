<?php 

function satloops(int $l){
    $block = "";

    for($i = 0; $i < 101; $i++){
        $singlestrip = hueloops($i,$l);
        $row = '<div class="row">' . $singlestrip . '</div>';
        $block .= $row;
    }

    return $block;
}


function hueloops(int $s, int $l){
    $strip = "";

    for($i=0; $i < 361; $i++){
        $code = "hsl(" . $i . " " . $s . "% " . $l . "%)"; 
        $mydiv = '<div style="background-color:' . $code . '"></div>';
        $strip .= $mydiv;
    }
    return $strip;
}

$alldivs = satloops(40);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment4.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bigboydavid">
        <?= $alldivs ?>
    </div>
</html>