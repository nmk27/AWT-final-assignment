<!-- Normal HTML5 syntax -->
<?php
    if (session_status() != PHP_SESSION_NONE) {
        session_destroy();
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>AWT Assignment</title>
</head>

<body>
    <div class="container">

        <div class="head">
            <h1>Welcome</h1>
            <div class="line"></div>
            <ul>
                <li>niran raj pradhan</li>
                <li>201900128</li>
                <li>cse</li>
                <li>5th sem, sec:a</li>
            </ul>
        </div>

        <div class="line"></div>

        <div class="buttons">
            <a href="dataentry.php">data entry</a>
            <a href="dataret.php">data retrieval</a>
        </div>

        <div class="line"></div>

        <h2>Favourite sports</h2>
        <div class="free">
            <a href="https://en.wikipedia.org/wiki/Esports" target="_blank">
                <img src="images/sports1.jpg" alt="esports">
            </a>
            <a href="https://en.wikipedia.org/wiki/UEFA_Champions_League" target="_blank">
                <img src="images/sports2.jpg" alt="ucl">
            </a>
            <a href="https://en.wikipedia.org/wiki/Concert" target="_blank">
                <img src="images/sports3.jpg" alt="liveperf">
            </a>
            <a href="https://en.wikipedia.org/wiki/Volleyball" target="_blank">
                <img src="images/vollyball.jpg" alt="vollyball">
            </a>
        </div>

        <div class="line"></div>

    </div>

    <!-- Connector to the footer file because this footer will be used everywhere -->
    <?php include 'footer.php'?>