<?php
/* Every thing is checked the same way rather than the checkbox */
$name = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['mail'];
$adress1 = $_POST['adrone'];
$adress2 = $_POST['adrtwo'];
$error = [];

    if(empty($name)){
        $error["Firstname"] = "First Name is required";
    } else if(strlen($name) < 5){
        $error["Firstname"] = "First Name should at least be 5 characters";
    } else if(!preg_match('/[A-Z]/', $name)) {
        $error["Firstname"] = "First Name have at least one upper case letter";
    }

    if(!str_contains($email, '@')){
        $error["Mail"] = "Mail have at least @";
    }else if(!str_ends_with($email, '.eu')) {
        $error["Mail"] = "Mail has to finsih with .eu";
    }

    if(empty($secondname)){
        $error["Secondname"] = "Second Name is required";
    }
    
    if(empty($adress1)){
        $error["Adress1"] = "Adress 1 is required";
    }

    if(empty($adress2)){
        $adress2 = "NHL STENDEN";
    } 

    if (!isset($_POST['checkboxes'])) {
        $error["checkbox"] = "Please choose at least one checkbox";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar Subscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Webinar Subscription</h2>

        <?php if(count($error) > 0) { ?>
            <section class="errors">
                <h3>Solve these errors : </h3>
                
                <?php if(isset($error["options"])) { ?>
                    <p>Options need to be filled</p>
                <?php } else {
                    foreach($error as $err) { ?>
                        <p><?= $err ?></p>
                    <?php } ?>
                <?php } ?>
            </section>
        <?php } else { ?>
            <section class="valid">
                <h3>THANK YOU !</h3>
                <p>First name : <?= $name ?></p>
                <p>Second name : <?= $secondname ?></p>
                <p>Mail : <?= $email ?></p>
                <p>Adress 1 : <?= $adress1 ?></p>
                <p>Adress 2 : <?= $adress2 ?></p>
            </section>
        <?php } ?>
</body>
</html>

