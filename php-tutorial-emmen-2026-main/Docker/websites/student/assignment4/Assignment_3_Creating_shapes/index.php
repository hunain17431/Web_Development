<?php 


function first(){
    for($i = 0; $i < 10; $i++){
        print("*");
    }
}


function second(){
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 10; $j++){
            print("*");
        }
        print("<br>");
    }
}

function third(){
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < $i + 1; $j++){
            print("*");
        }
        print("<br>");
    }
}

function four(){
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 10 - $i; $j++){
            print("*");
        }
        print("<br>");
    }
}


function five(){
    for($i = 0; $i < 6; $i++){
        for($k = 0; $k < $i + 1; $k++){
            print($k + 1);
        }
        print("<br>");
    }
}

function six(){
    for($i = 0; $i < 6; $i++){
        for($k = 0; $k < 6 - $i; $k++){
            print($k + 1);
        }
        print("<br>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-3</title>
</head>
<body>
    <div>
        <?= six() ?>
    </div>
</body>
</html>