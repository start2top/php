<?php

$rightAnswers = array(
    'answer1' => 3,
    'answer2' => 1,
    'answer3' => 1
);

if(isset($_POST['answer3'])) {
    $answer3 = intval($_POST['answer3']);
}

session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];

session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="style.css">
    <title>Результат</title>
</head>
<body>
    <div class="container">
    <p>Ваш результат</p>
    <p>1) Столица Австралии</p>
    <?php
    if($answer1 == $rightAnswers['answer1']) {
        echo "Правильно! Столица Австралии, Сидней";
    } else {
        echo "Неправильно. Столица Австралии, Сидней";
    }
    ?>
   <p>2) Химический элемент периодической системы с обозначением H ?</p>
   <?php 
    if($answer2 == $rightAnswers['answer2']) {
        echo "Правильно! H это водород";
    } else {
        echo "Неправильно. H это водород";
    }
   ?>

    <p>3) Сколько будет 2 + 2 * 2 ?</p>
    <?php 
    if($answer3 == $rightAnswers['answer3']) {
        echo "Правильно! Сперва умножаем 2 * 2 = 4, потом прибавляем 2 = 6";
    } else {
        echo "Неправильно! Сперва умножаем 2 * 2 = 4, потом прибавляем 2 = 6";
    }
    ?>
    <hr>
    </div>

</body>
</html>