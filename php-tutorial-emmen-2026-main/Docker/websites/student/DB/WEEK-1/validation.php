<?php
$distances = array(
    "Berlin" => array(
    "Berlin" => 0,
    "Moscow" => 1607.99,
    "Paris" => 876.96,
    "Prague" => 280.34,
    "Rome" => 1181.67
    ),
    "Moscow" => array(
    "Berlin" => 1607.99,
    "Moscow" => 0,
    "Paris" => 2484.92,
    "Prague" => 1664.04,
    "Rome" => 2374.26
    ),
    "Paris" => array(
    "Berlin" => 876.96,
    "Moscow" => 641.31,
    "Paris" => 0,
    "Prague" => 885.38,
    "Rome" => 1105.76
    ),
    "Prague" => array(
    "Berlin" => 280.34,
    "Moscow" => 1664.04,
    "Paris" => 885.38,
    "Prague" => 0,
    "Rome" => 922
    ),
    "Rome" => array(
    "Berlin" => 1181.67,
    "Moscow" => 2374.26,
    "Paris" => 1105.76,
    "Prague" => 922,
    "Rome" => 0
    )
);

/* validation */

$errors = [];
$sucess = false;
$city1 = $_POST["first"];
$city2 = $_POST["second"];

if(empty($city1) || empty($city2)){
    $errors["empty"] = "City can't be empty";
} else {
    $sucess = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php if($sucess) { ?>
        <div>
            <p>The distance between <?= $city1 ?> and <?= $city2 ?> is <?= $distances[$city1][$city2]?> km</p>
        </div>

    <?php } else if(count($errors) > 0) { ?>
            <div><?= $errors["empty"] ?></div>
    <?php } ?>
    </div>
</body>
</html>