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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="whole-form">
        <form method="POST" action="./validation.php">
            <div>
                <label for="first">1ST CITY</label>
                <select name="first" id="first">
                    <option value="">-None-</option>
                        <?php foreach($distances as $city => $value){ ?>
                            <option value="<?= $city ?>"><?= $city ?></option>
                        <?php } ?>
                </select>
            </div>
            <div>
                <label for="second">2ND CITY</label>
                <select name="second" id="second">
                    <option value="">-None-</option>
                        <?php foreach($distances as $city => $value){ ?>
                            <option value="<?= $city ?>"><?= $city ?></option>
                        <?php } ?>
                </select>
            </div>
            <button type="submit">SUBMIT</button>
        </form> 
    </div>
</body>
</html> 