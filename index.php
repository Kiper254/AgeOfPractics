<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:; connect-src 'self'; object-src 'none'; base-uri 'self'; frame-ancestors 'none';");
header("Strict-Transport-Security: max-age=63072000; includeSubDomains; preload");
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: no-referrer");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>AgeOfPractics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

    <h1>AgeOfPractics</h1>
    <h3>Jakis opis gry</h3>

    <h2>Postęp prac</h2>

    <div class="progress">
        <div class="bar"></div>
    </div>

    <p>15%</p>

    <div class="buttons">
        <a href="updates.php" class="btn">Planowane update'y</a>
        <a href="quiz.php" class="btn">Mini quiz historyczny</a>
        <a href="contact.php" class="btn">Kontakt</a>
    </div>

</div>

</body>
</html>