<?php 

$errors = [];
$success = false;
$name = $_POST["nam"];
$mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
$person = $_POST["person"];
$comment = $_POST["comment"];
$send = isset($_POST["sendmail"]) ? $_POST["sendmail"] : null;


if(empty($name)) {
    $errors["name"] = "Name can't be empty";
}else if(strlen($name) < 2) {
    $errors["name"] = "Name to have more then 2 letters";
}


if (!$mail) {
    $errors["mail"] = "Please enter a valid email address";
}

if(empty($person)){
    $errors["person"] = "Please choose a person";
}


if(empty($comment)){
    $errors["comment"] = "Comment can't be empty";
}else if(str_word_count($comment) < 5){
    $errors["comment"] = "comment to have more then 5 words";
}

if(count($errors) == 0) { 
    $success = true;
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
        <?php if(count($errors) > 0) {?>
            <h2>ERRORS</h2>
            <?php foreach($errors as $err) {?>
                <p><?= $err ?></p>
        <?php }
         } else if($success) {?>
            <p>Dear <?= $name ?></p>
            <p>You will post comments as <?= $person ?> with the following e-mail address: <?= $mail ?></p>
            <p>The comment is as follows: <?= $comment ?>.</p>
            <?php if($send) { ?>
                <p>All users will be notified of this</p>
            <?php } else {?>
                <p>All users will not be notified</p>
        <?php } } ?>
    </div>
</body>
</html>
