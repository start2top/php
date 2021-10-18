<?php 

        require_once 'classes.php';

        $publications = array();

        //connect DB
        $con = mysqli_connect("localhost", "root", "", "books");
        if (mysqli_connect_errno()) {
            echo 'Не Удалось подключиться к базе данных Книг';
        }

        // MySql query
        $result = mysqli_query($con, 'SELECT * FROM book_list');

        //working with results
        while($row = mysqli_fetch_array($result)) {
            $publications[] = new $row['type']($row);
        }