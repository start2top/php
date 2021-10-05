<?php
    //Creating connection to MySQL
    $con = mysqli_connect("localhost", "root", "", "testsite");
    mysqli_set_charset($con, "utf8");


    //Check connection
    if (mysqli_connect_errno()) {
        //В случеа ошибки, выводим её на экран
        echo "Неудалось подключиться к базе данных". mysqli_connect_error();
    }

    $query = "SELECT id, h1, short_content FROM news WHERE status=1";
    $result = mysqli_query($con, $query);

    $count = mysqli_num_rows($result);

    $newslist = '';

    while($news = mysqli_fetch_array($result))
    {
        $newslist .= '<h1>'.$news['h1'].'</h1>'
                    . '<p>'.$news['short_content'].'</p>'
                    . '<a href="/news/view/'.$news['id'].'">Читать далее</a>';
    }
    echo $newslist;
    ?>