<?php
@$connect = new mysqli('localhost','root','root','edusisco');

    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
        exit;
    }

    $connect -> set_charset("utf8");


?>