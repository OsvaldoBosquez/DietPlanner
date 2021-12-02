<?php
include 'header2.php';
require_once "php/private/autoloader.php";
require_once "php/private/validate-logged.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-menus.css">
    <title>Document</title>
</head>

<body>
<section class="main">
    <div>
        <h3>Bienvenido</h3>
        <h4>Para acceder a la lista de tus menus debes actualizar/realizar tu pago</h4>
    </div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="UJKRKV6BK46ZW">
        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
    </form>
</section>


</body>
<?php
require_once "scripts.php";
?>
<script src="js/menu.js"></script>