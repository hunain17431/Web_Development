<?php 
$menuTexts = array("Home", "Most hired cars", "Contact");
$links = array("index.php","#","contact.html");
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["firstname"];
    $surname = $_POST["secondname"];
    $brand = $_POST["brand"];
    $type = $_POST["type"];
    $options = $_POST["options"];
    $insurance = $_POST["insurance"];

    if (empty($name)) $errors["name"] = "Name is required";
    if (empty($surname)) $errors["surname"] = "SurName is required";
    if (str_word_count($options) < 5 || !preg_match('/[A-Z]/', $options)) $errors["options"] = "The Options field must contain 5 words in capital letters";

    if (count($errors) == 0) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing's Cars™</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="menu-container">
                <ul>
                    <?php for ($i = 0; $i < count($menuTexts); $i++) { ?>
                        <li><a href="<?= $links[$i] ?>"><?= $menuTexts[$i] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
    <section class="contact-main">
        <div>
            <?php if(count($errors) > 0) { ?>
                <div class="contact-header">
                    <h3>Request a car!</h3>
                </div>
                <div class="error">
                    <?php if(isset($errors["options"])){ ?>
                        <p><?= $errors["options"] ?> </p>
                <?php } else { ?>
                        <p>Please provide all necessary information</p>
                <?php   } ?>
                </div>
            <?php } else if($success){ ?>
                <div class="contact-header">
                    <h3>THANK YOU!</h3>
                </div>
                <div class="valid">
                    <p>First name : <?= $name ?></p>
                    <p>Last name : <?= $surname ?></p>
                    <p>Car Brand & Model : <?= $brand . " " . $type ?></p>
                    <p>Options : <?= $options ?></p>
                    <p>Do you want insurance : <?= $insurance ?></p>
                </div>
            <?php } ?>
        </div>
    </section>
    <footer>
        <div>
            <p>&copy 2022 Bings cars</p>
            <a href="#">Send us a direct e-mail</a>
        </div>
        <div>
            <ul>
                <li>Monday 13:00 - 18:00</li>
                <li>Tuesday 9:00 - 18:00</li>
                <li>Wednesday 9:00 - 18:00</li>
                <li>Thursday 9:00 - 21:00</li>
                <li>Friday 9:00 - 21:00</li>
                <li>Saturday 9:00 - 17:00</li>
            </ul>
        </div>
    </footer>
</body>
</html>