<?php 
    include "functions.php";
    include "resources/db_connect.php";
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php getPageName();?></title>
    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo"></div>
            <nav>
                <ul class="nav__links" id="nav__links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="offer.php">Oferta</a></li>
                    <li><a href="about.php">O nas</a></li>
                    <li><a href="gallery.php">Galeria</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </nav>
    </header>