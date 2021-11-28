<?php
require_once "php/private/autoloader.php";
require_once "php/private/validate-logged.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style-user.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="index">
            <a href="#">DietPlanner</a>
        </div>
        <div id="menu">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="menu-inner">

            <ul>
            <li><a href="user-plans.php">Planes</a></li>
                <li><a href="user-alerts.php">Alertas</a></li>
                <li><a href="user-reminders.php">Recordatorios</a></li>
                <hr>
                <li><a href="index.php" id="btn-logOut">Cerrar Sesion</a></li>
            </ul>
        </div>

        <svg version="1.1" id="blob" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="blob-path" d="M60,500H0V0h60c0,0,20,172,20,250S60,900,60,500z" />
        </svg>
    </div>
    </header>
    <section class="container">
        <div>
            <p>
                "CUIDARME es la mejor decisión que he tomado"
            </p>
            <p class="italic">-Mentxu da Vinci</p>
        </div>
    </section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/menu.js"></script>
</html>