<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeTask</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="a"><br><br>
        <input type="text" name="b"><br><br>
        <input type="text" name="c"><br><br>
        <input type="text" name="d"><br><br>
        <input type="text" name="e"><br><br>
        <input type="text" name="f"><br><br>
        <input type="text" name="g"><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
<?php
if (isset($_POST['submit'])) {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $c = intval($_POST['c']);
    $d = intval($_POST['d']);
    $e = intval($_POST['e']);
    $f = intval($_POST['f']);
    $g = intval($_POST['g']);
}

    $arr = array($a, $b, $c, $d, $e, $f, $g);

    echo '<hr>';

    echo "Вы отправили: A = $a, B = $b, C = $c, D = $d, E = $e, F = $f, G = $g" . '<br><br>';
    
    echo 'Минимальное значение:  ' . min($arr) . '<br><br>'; 
    echo 'Максимальное значение' . max($arr) . '<br><br>';
    

?>
</body>
</html>