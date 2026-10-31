<?php 
    $menuTexts = array("Home", "Most hired cars", "Contact");
    $links = array("index.php","#","contact.html")

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
        <div class="contact-header">
            <h3>Request a car!</h3>
        </div>
        <form class="contact-form" action="validation.php" method="post">
            <div class="contact-head">
                <label for="name">FirstName</label>
                <input type="text" name="firstname">
            </div>
            <div class="contact-head">
                <label for="name">LastName</label>
                <input type="text" name="secondname">
            </div>
            <label for="car">Car brand & model</label>
            <div class="contact-select">
                <div>
                    <select name="brand" id="car">
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                    </select>
                </div>
                <div>
                    <select name="type">
                        <option value="Hatchback">Hatchback</option>
                        <option value="Cabrio">Cabrio</option>
                    </select>
                </div>
            </div>
            <div class="contact-options">
                <label for="options">Options</label>
                <textarea name="options" rows="4" id="options" placeholder="Add extra options here if u want them..."></textarea>
            </div>
            <p class="text">Do you want insurance?</p>
            <div class="contact-insurance">
                <label><input type="radio" name="insurance" value="yes"> Yes</label>
                <label><input type="radio" name="insurance" value="no"> No</label>
            </div>

            <button type="submit">Send request</button>
        </form>
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