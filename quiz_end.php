<?php
require 'functions.php';

$score = $_SESSION['score'] ?? 0;
$total = count(getQuestions());
$failed = $_SESSION['failed'] ?? false;

session_destroy();
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <title>Koniec quizu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

    <?php if ($failed): ?>
        <h1 class="fail">Przegrana</h1>
    <?php else: ?>
        <h1 class="win">Wygrana</h1>
    <?php endif; ?>

    <h2>Twój wynik: <?= $score ?>/<?= $total ?></h2>

    <?php if ($score == $total): ?>
        <h2>Kod nagrody: 123</h2>
    <?php endif; ?>

    <a href="quiz.php">Zagraj ponownie</a>
    <a href="index.php">Powrót</a>

</div>

</body>
</html>