<?php
require_once "php/private/autoloader.php";
require_once "php/private/validate-logged.php";
$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header2.css">
</head>

<body>
    <header>
        <div class="index">
            <a href="user.php">DietPlanner</a>
        </div>
        <div id="menu">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="menu-inner">

                <ul class="list">
                    <li><a id="plans">Planes</a></li>
                    <li><a href="user-alerts.php">Alertas</a></li>
                    <li><a href="user-reminders.php">Recordatorios</a></li>
                    <hr>
                    <li><a href="index.php">Cerrar Sesion</a></li>
                </ul>
            </div>

            <svg version="1.1" id="blob" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path id="blob-path" d="M60,500H0V0h60c0,0,20,172,20,250S60,900,60,500z" />
            </svg>
        </div>
    </header>
</body>
<?php
require_once "scripts.php";
?>
<script>
    $(document).ready(function() {
        loadValidationField();
    });

    function validar(int) {
        if (int == 1) {
            $("#plans").attr("href", "user-menus.php");
        } else if(int == 0){
            $("#plans").attr("href", "plans-pay.php");
        }
    }

    var id_user = "<?php echo json_decode($id_user) ?>";

    function loadValidationField() {
        var ar = {
            id_user: id_user
        }
        $.post("php/users/load.php", {
            data: JSON.stringify(ar)
        }, function(data) {
            var ret = JSON.parse(data);
            //console.log(ret);
            if (data < 0) {
                toastr.options.closeButton = true;
                toastr.error("Ha ocurrido un error");
                return;
            }
            ret = ret[0];
            var pay = ret["validation"];
            validar(pay);

        }).fail(function(error) {
            toastr.options.closeButton = true;
            toastr.error("Ha ocurrido un error");
            return;
        });
    }
</script>

</html>