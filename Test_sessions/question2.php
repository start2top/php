<?php  
       if(isset($_POST['answer1'])){
           session_start();
           $_SESSION['answer1'] = intval($_POST['answer1']);
       }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="style.css">
    <title>Вопрос 2</title>
</head>
<body>
    <div class="container">
    <p>Вопрос 2</p>
    <p>Химический элемент периодической системы с обозначением H ?</p>
    <form action="question3.php" method="POST">
        <label> Водород
            <input type="radio" name="answer2" value="1">
        </label>
        <br>
        <label> Натрий
            <input type="radio" name="answer2" value="2">
        </label>
        <br>
        <label>Азот
            <input type="radio" name="answer2" value="3">
        </label>
        <br><br>
        <input type="submit"  value="Далее">
    </form>
    
    </div>
</body>
</html>