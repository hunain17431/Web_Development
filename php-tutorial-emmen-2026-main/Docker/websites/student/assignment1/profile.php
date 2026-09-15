<?php 
$NAME = "Hunain Mukhtar Manzoor";
$COUNTRY = "Spain";
$CITY = "Barcelona";
$HOBBY = "Football";
$SIBLINGS = 3;
$BROTHERS = 1;
$SISTERS = 2;
$FOODS = ["PAELLA","TORTILLA","QUESO"];
$myFavoriteFood = $FOODS[0];

function age(){
    $age = date("Y") - 2006;
    return $age;
}

if($SIBLINGS >= 1){
    if($BROTHERS == 0){
        $result = "I have $SISTERS sisters";
    }else if($SISTERS == 0){
        $result = "I have $BROTHERS brothers";
    }else{
        $result = "I have $SISTERS sisters and $BROTHERS brothers";
    }
}else{
    $result = "I have no siblings";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1php</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1> This is the profile page of <?= $NAME ?> </h1>
    </header>
    <section>
        <p> My name is <?= $NAME ?>. I live in <?= $CITY ?>. I am currently <?= age() ?> years of age. My hobby is playing <?= $HOBBY ?>. <?= $result ?></p>
    </section>
    <section>
        <p> You can find me on 
            <img class="image" src="ilovepdf.png" alt="pdf">
            <a href="https://www.ilovepdf.com/">ilovepdf</a>
        </p>
    </section>
    <section>
        <p>In my Home country we love to eat :</p>
        <ul>
            <?php
            foreach ($FOODS as $food) {
                if ($food == $myFavoriteFood) {
                    $classname = "favorite";
                } else {
                    $classname = "normal";
                }
                echo "<li class='$classname'>$food</li>";
            }
            ?>
        </ul>
    </section>
</body>
</html>