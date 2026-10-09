<?php

$background = "";

function colors($h,$s,$l){
    $code = "";

    if($h >= 0 && $h <= 360){
        $code .= "hsl(" . $h . " ";
    }else {
        return "hsl(0 0% 0%)";
    }

    if($s >= 0 && $s <= 100){
        $code .= $s . "% ";
    }else {
        return "hsl(0 0% 0%)";
    }

    if($l >= 0 && $l <= 100){
        $code .= $l . "%)";
    }else {
        return "hsl(0 0% 0%)";
    }

    return $code;
}

$background = colors(20,50,80);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4.1</title>
</head>
<body>
        <div style="background-color:<?= $background ?>">hello</div>
</body>
</html>