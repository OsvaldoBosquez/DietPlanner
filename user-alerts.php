<?php include 'header2.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-alerts.css">
    <title>Document</title>
</head>

<body>
    <section class="main">
        <div class="principal">
            <div class="titleR">
                <h4>Alertas</h4>
            </div>
            <div class="wrap">
                <div class="t">Hora:</div>
                <div class="timeis" id="tm"></div>
            </div>
        </div>
        <div class="wrap">
            <div class="desperta">
                DESPERTADOR:<br /><br /> 
                hora: <input type="text" id="hora"> 
                minuto: <input type="text" id="minuto">
                <button>OK!</button>
            </div>
        </div>
    </section>

</body>
<script src="js/timer.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/menu.js"></script>

</html>