<?php
$pagina = basename($_SERVER["PHP_SELF"]);
?>
<!doctype html>
<html>
<head>
    <link href="css/Main.css" type="text/css" rel="stylesheet">
    <title>Espresso bar Chavez</title>
    <meta charset="UTF-8">
</head>


<body>
<header>
    <nav>
        <ul>
            <li>
                <a <?php if ($pagina == "index.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="index.php">
                    <p class="MenuKnoop">Home</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Over.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Over.php">

                    <p class="MenuKnoop">Over</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Jobs.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Jobs.php">
                    <p class="MenuKnoop">Jobs</p>
                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Contact.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Contact.php">
                    <p class="MenuKnoop">Contact</p>
                </a>
            </li>
        </ul>
        <img src="home/home-banner.jpg" alt="Banner" id="Banner">
    </nav>
</header>