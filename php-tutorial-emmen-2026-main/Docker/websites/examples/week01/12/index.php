<?php

# let's setup some variables to display later (this is comment by the way :))

$name = "Marci";
$surname = "David";
$year = "2025";

function calc(int $a, int $b) {
    $x = $a * $b;
    return $x;
}

function verification(int $a){

    $result = "";

    if ($a == 2026) {
            $result = "Yesss";
    } else if ($a == 2025) {
            $result = "It is 2025";
    } else {
            $result = "No";
    }

    return $result;
}

$fecha = verification($year);
$multi = calc(2,6);


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Example 2</title>
    <link rel="sheet" href="style.css">
</head>
<body>
<h1>Welcome <?= $name ?> <?= $surname ?></h1>
<p>
  This is a simple website using variables to add dynamic content. You can change the values of the variables on lines
    5 and 6 to display your own name.
</p>
<p>
    Today is <?= date("l jS \of F Y h:i:s A") ?>.
</p>
<p>
    283 times 4937 = <?= $multi ?>
</p>

<p>
    Is it 2026? <?= $fecha ?>
</p>
</body>
</html>

