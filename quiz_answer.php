<?php
require 'functions.php';

$questions = getQuestions();

$q = $_SESSION['q'];
$score = $_SESSION['score'];

$correct = $questions[$q]['correct'];

if ((int)$_POST['answer'] !== $correct) {
    $_SESSION['failed'] = true;
    header("Location: quiz_end.php");
    exit;
}

$_SESSION['score']++;
$_SESSION['q']++;

if ($_SESSION['q'] >= count($questions)) {
    header("Location: quiz_end.php");
    exit;
}

header("Location: quiz.php");
exit;