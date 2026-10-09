<?php 

function colors(int $s, int $l){
    $block = "";

    for($i=0; $i < 361; $i++){
        $code = "hsl(" . $i . " " . $s . "% " . $l . "%)"; 
        $mydiv = '<div style="background-color:' . $code . '"></div>';
        $block .= $mydiv;
    }
    return $block;
}

$alldivs = colors(50,80);

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
</body>
</html>