<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio form</title>
</head>
<body>
    <form action="radio_form.php" method="POST">
            <p> Ваше имя: </p>
        <input type="text" name="firstname" placeholder="Введите ваше имя">
            <br><br>
            <p>Ваш пол:</p>
        <input type="radio" name="gender" value="male" checked="checked">Мужской
        <input type="radio" name="gender" value="female">Женский
                <br><br>
        <input type="submit" value="отправить" name="submit">
                <br><br><br>
       
    </form>
<?php
// проверяем если форма отправлена успешно && поле для имени заполнено 
if(isset($_POST['submit']) && !empty($_POST['firstname'])) {
    // соединяем  формы именя и выбора поля
    $name = $_POST['firstname'];
    $gender = $_POST['gender'];


   // Пишем обращение мужского или женскоо пола
    if($gender == 'male') {
        echo "Добро пожаловать, господин $name!";
    } else {
        echo "Добро пожаловать, госпожа $name!";
    } 
}
?>
</body>
</html>