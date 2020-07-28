<?php

    /* database connection variables */

    $dbServer = 'localhost';
    $dbUser = 'kwieczorek1998';
    $dbPassword = 'Zaq123!@#';
    $dbName = 'krzysztofwieczorek1998';


    $mysqli = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

    $mysqli->set_charset("utf8");
    if(mysqli_connect_errno())
        {
            echo 'Błąd bazy danych!';
        }

