<?php
$news = [
    ["title" => "Novatech student team wins national robotics challenge", "date" => "May 16,2026", "img" => "newsitem-01.png"],
    ["title" => "New solar energy project launched on campus", "date" => "may 10, 2026", "img" => "newsitem-02.png"],
    ["title" => "Open day on june 15 - register now!", "date" => "May 3, 2026", "img" => "newsitem-03.png"],
];

$topics = [
    ["title" => "Hands-on learning", "img" => "icon-hat.png", "message" => "Work on real-world projects in modern labs and practical environments"],
    ["title" => "Strong connections", "img" => "icon-connected", "message" => "We collaborate with leading companies and organizations worldwide"],
    ["title" => "Innovation &amp; Research", "img" => "icon-lightbulb.png", "message" => "We solve real challenges and create the solutions of tomorrow"],
    ["title" => "Global perspective", "img" => "icon-globe.png", "message" => "Gain international experience and work together accross borders."],
];


$links = [
    "Programs" => [
        "Mechanical Engineering",
        "Electrical Engineering",
        "Civil Engineering",
        "Maritime Engineering",
        "Computer Science",
        "All programs"],
    "Study at Novatech" => [
        "Why study with us",
        "Application &amp; admission",
        "Tuition & financing",
        "Student life",
        "Housing",
        "International Students",
    ],
    "Research &amp; Innovation" => [
        "Research Areas",
        "Our partners",
        "Projects",
        "Labs &amp; facilities",
        "Publications",
        "Innovation Hub",
    ],
    "About Novatech" => [
        "About us",
        "Mission &amp; Vision",
        "Organization",
        "Work at Novatech",
        "Sustainability",
        "News",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="nav-bar">
                <p>Student Portal</p>
                <p>Intranet</p>
                <p>English</p>
                <p>Search</p>
            </div>
            <div class="nav-main">
                <div class="nav-logo">
                    <img src="images/logo-in-banner.png" alt="Logo header">
                </div>
                <div class="nav-links">
                    <ul>
                        <li>Programs &#x2EF</li>
                        <li>Study at Novatech &#x2EF</li>
                        <li>Research &amp; Innovation &#x2EF</li>
                        <li>About Novatech &#x2EF</li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="nav-button">
                    <button><a href="pages/contact.php">Request a brochure for a form</a></button>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <div class="hero-section">
            <div>
                <h2>Technology. <br> Innovation. <br> Your Future.</h2>
                <p>At Novatech University of Applied Sciences,<br> we empower students to become
                tomorrow's <br> innovators and problem solvers.</p>
                <button><a href="#">Explore our programs ></a></button>
            </div>
        </div>
    </section>
    <section class="cards-section">
        <div class="cards-row">
            <?php for ($i = 0; $i < count($topics); $i++) { ?>
            <div class="card">
                <h3><?= $topics[$i]["title"] ?></h3>
                <div>
                    <img src="<?= $topics[$i]["img"] ?>" alt="image cards">
                    <p><?= $topics[$i]["message"] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="news-section">
        <div class="news-left">
            <h4>News & Events</h4>
            <button><a href="#">View all <br> events ></a></button>
        </div>
        <div class="news-right">
            <?php for ($i = 0; $i < count($news); $i++) { ?>
            <div class="news-card">
                <div class="news-card-image">
                    <img src="images/<?= $news[$i]["img"] ?>" alt="">
                </div>
                <div class="news-card-content">
                    <h4><?= $news[$i]["date"] ?></h4>
                    <p><?= $news[$i]["title"] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <footer>
        <div class="footer-left">
            <img src="images/logo-in-banner.png" alt="logo footer">
            <p>Novatech University of Applied Sciences in Winterswijk is a leading technical University
                in the East of the Netherlands . We connect technology, innovation and craftsmanship to
                shape the world of tomorrow.
            </p>
        </div>
        <div class="footer-middle">
            <div>
                <h4>Programs</h4>
                <p>Mechanical Engineering <br>Electrical Engineering <br> Civil Engineering <br> Maritime Engineering <br> Computer Science" <br> All programs</p>
            </div>
            <div>
                <h4>Study at novatech</h4>
                <p>Mechanical Engineering <br>Electrical Engineering <br> Civil Engineering <br> Maritime Engineering <br> Computer Science" <br> All programs</p>
            </div>
            <div>
                <h4>Research and innovation</h4>
                <p>Mechanical Engineering <br>Electrical Engineering <br> Civil Engineering <br> Maritime Engineering <br> Computer Science" <br> All programs</p>
            </div>
            <div>
                <h4>About Novatech</h4>
                <p>Mechanical Engineering <br>Electrical Engineering <br> Civil Engineering <br> Maritime Engineering <br> Computer Science" <br> All programs</p>
            </div>
        </div>
        <div class="footer-right">
            <h4>Contact</h4>
            <p>Novatech University</p>
            <p>Campuslaan 1</p>
            <p>7102CT Winterwskij</p>
            <p> &#9742 +31(0)543-542020</p>
            <p> &#9993 info@novatech.nl</p>
            <button><a href="@">&#128197 Plan your visit</a></button>
        </div>
    </footer>
</body>
</html>