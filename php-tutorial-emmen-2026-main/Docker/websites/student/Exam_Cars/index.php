<?php 
    $menuTexts = array("Home", "Most hired cars", "Contact");
    $links = array("index.php","#","contact.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing's Cars™</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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
    <section class="hero-section">
        <div>
            <h1>Bing's Cars</h1>
            <h2>For all your special cars</h2>
        </div>
    </section>
    <section class="main-section">
        <div class="main-header">
            <h3>Pick one of our popular cars!</h3>
        </div>
        <div class="main-row1">
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
        </div>
        <div class="main-row2">
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
            <div class="card">
                <img src="../Exam_Cars/images/car1.png" alt="">
                <h4>Hyonda</h4>
                <span>$ 120.000</span>
                <p>Beautiful car that can last for years to come.</p>
            </div>
        </div>
    </section>
    <section class="container">
        <h3>Who is Bing cars?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis posuere nulla, quis ultrices quam sollicitudin ut. Maecenas ac arcu ullamcorper, aliquam dui vel, scelerisque turpis. Vivamus urna sem, rutrum sed arcu in, cursus dictum diam. Vestibulum bibendum vulputate magna et sagittis. Nullam nunc mauris, laoreet at eros id, maximus ullamcorper lectus. Nulla rhoncus quam eu tristique viverra. Cras risus dolor, pellentesque molestie dictum quis, blandit a augue. Cras pharetra massa ut nisi ullamcorper, ut cursus lorem dictum. Quisque vulputate orci malesuada massa porta sagittis. Aliquam sit amet dui quis ex vehicula placerat.</p>
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