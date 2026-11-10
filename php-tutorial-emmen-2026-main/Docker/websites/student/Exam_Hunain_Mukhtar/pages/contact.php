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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/contact.css">
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
                    <img src="../images/logo-in-banner.png" alt="Logo header">
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
                    <button><a href="pages/contact.html">Request a brochure for a form</a></button>
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
    <div class="forms">
        <form action="validation.php" method="post">
            <h3>The Form</h3>
            <div>
                <label for="language">Language *</label>
                <select name="language" id="language">
                        <option value="German">German</option>
                        <option value="Dutch">Dutch</option>
                        <option value="English">English</option>
                        <option value="French">French</option>
                </select>
            </div>
            <div>
                <label for="lastname">Program*</label>
                <select name="language" id="language">
                        <option value="">-- CHOOSE A PROGRAMM ---</option>
                        <option value="Mechanical">Mechanical Engineering</option>
                        <option value="Electrical">Electrical Engineering</option>
                        <option value="Civil">Civil Engineering</option>
                        <option value="Maritime">Maritime Engineering</option>
                        <option value="Computer">Computer Science</option>
                </select>
            </div>
            <div>
                <label for="mail">Send by*</label>
                <fieldset>
                    <label><input type="radio" id="mail" name="options" value="M">Mail</label><br>
                    <label><input type="radio" id="printed" name="options" value="P">Printed</label><br>
                </fieldset>
            </div>
            <div>
                <label for="name">Your name*</label>
                <input type="text" name="yourname" id="name">
            </div>
            <div>
                <label for="adress">Adress</label>
                <input type="text" name="adress" id="adress">
            </div>  
            <div>
                <label for="city">City</label>
                <input type="text" name="city" id="city">
            </div>                     
            <div>
                <label for="country">Country</label>
                <input type="text" name="country" id="country">
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>