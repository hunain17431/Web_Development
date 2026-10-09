<?php
$result = random_int(0,20);
$result2 = random_int(0,20);
$result3 = random_int(0,20);
$answer = "";
$answer2 = "";
$answer3 = "";

function first($x){
    if($x < 1){
        return "Invalid figure";
    }else if($x >= 1 && $x <= 3) {
        return "Very bad";
    }else if($x == 4 || $x == 5) {
        return "Insufficient";
    }else if($x == 6 || $x == 7) {
        return "Sufficient";
    }else if($x == 8) {
        return "Good";
    }else if($x == 9) {
        return "Very good";
    }else if($x == 10) {
        return "Excellent";
    }else{
        return "Invalid figure";
    }
}

function second($y){
    switch ($y) {
        case 1: $answerswitch = 'Very bad'; break;
        case 2: $answerswitch = 'Very bad'; break;
        case 3: $answerswitch = 'Very bad'; break;
        case 4: $answerswitch = 'Insufficient'; break;
        case 5: $answerswitch = 'Insufficient'; break;
        case 6: $answerswitch = 'Sufficient'; break;
        case 7: $answerswitch = 'Sufficient'; break;
        case 8: $answerswitch = 'Good'; break;
        case 9: $answerswitch = 'Very good'; break;
        case 10: $answerswitch = 'Excellent'; break;
        default: $answerswitch = 'Invalid figure'; break;
    }
    return $answerswitch;
}

function third($z){
    $answermatch = match ($z) {
            1 => 'Very bad',
            2 => 'Very bad',
            3 => 'Very bad',
            4 => 'Insufficient',
            5 => 'Insufficient',
            6 => 'Sufficient',
            7 => 'Sufficient',
            8 => 'Good',
            9 => 'Very good',
            10 => 'Excellent', 
            default => 'Invalid figure'
        };
    return $answermatch;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming with Conditionals</title>
</head>
<body>
    <p>
        <?php 
            print($result);
        ?>
    </p>
    <p>
        <?php 
            $answer = first($result);
            print($answer);
        ?>
    </p>

    <p>
        <?php 
            print($result2);
        ?>
    </p>
    <p>
        <?php 
            $answer2 = second($result2);
            print($answer2);
        ?>
    </p>

        <p>
        <?php 
            print($result3);
        ?>
    </p>
    <p>
        <?php 
            $answer3 = third($result3);
            print($answer3);
        ?>
    </p>
</body>
</html>