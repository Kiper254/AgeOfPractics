<?php
require 'functions.php';

if (!isset($_SESSION['q']) || !isset($_SESSION['score'])) {
    $_SESSION['q'] = 0;
    $_SESSION['score'] = 0;
}

$questions = getQuestions();
$q = $_SESSION['q'];

if ($q >= count($questions)) {
    header("Location: quiz_end.php");
    exit;
}

$question = $questions[$q];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

    <h2><?= $question['question'] ?></h2>

    <form method="POST" action="quiz_answer.php">
        <?php foreach ($question['answers'] as $i => $a): ?>
            <button type="submit" name="answer" value="<?= $i ?>">
                <?= $a ?>
            </button>
        <?php endforeach; ?>
    </form>

</div>

</body>
</html>