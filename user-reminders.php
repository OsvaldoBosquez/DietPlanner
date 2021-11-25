<?php include 'header2.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-reminders.css">
    <title>Document</title>
</head>

<body>
    <section class="main">
        <div class="principal">
            <div class="titleR">
                <h4>Recordatorios</h4>
            </div>
            <div class="wrap">
                <form class="formulario" action="">
                    <input type="text" id="tareaInput" placeholder="Agrega tu recordatorio">
                    <input type="button" class="boton" id="btn-agregar" value="Agregar Recordatorio">
                </form>
            </div>
        </div>

        <div class="tareas">
            <div class="wrap">
                <ul class="lista" id="lista">
                    <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
        </div>        
    </section>
</body>
<script src="js/list.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/menu.js"></script>

</html>