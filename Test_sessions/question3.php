<?php if(isset($_POST['answer2'])) {
            session_start();
            $_SESSION['answer2'] = intval($_POST['answer2']);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="style.css">
    <title>Вопрос 3</title>
</head>
<body>
    <div class="container">
    <p>Вопрос 3</p>
    <p>Сколько будет 2 + 2 * 2 ?</p>
    <form action="result.php" method="POST">
        <label>6
            <input type="radio" name="answer3" value="1">
        </label>
        <br>
        <label>8
            <input type="radio" name="answer3" value="2">
        </label>
        <br>
        <label>12
            <input type="radio" name="answer3" value="3">
        </label>
        <br>
        <input type="submit"  value="Далее">
    </form>
  
    </div>
</body>
</html>