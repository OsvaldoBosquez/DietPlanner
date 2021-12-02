<?php
include 'header2.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-menus.css">
    <title>Menus</title>
</head>

<body>
    <section class="main">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col" class="w-16">Id_Menus</th>
                        <th scope="col" class="w-16">Menus</th>
                    </tr>
                </thead>

                <table class="table align-middle">
                    <tbody id="lista">
                    </tbody>
                </table>
            </table>
        </div>
        <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="R5Q2LUGE5Q2SL">
            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
        </form> -->




    </section>

</body>
<?php
require_once "scripts.php";
?>
<script src="js/menu.js"></script>

<script>
    var id_user = "<?php echo json_decode($id_user) ?>";
    $(document).ready(function(){
        updatePay();
    });
    (function() {
        var ar = {
            id_menu: id_user
        }
        $.post("php/plans/load-menu.php", {
            data: JSON.stringify(ar)
        }, function(data) {
            var ret = JSON.parse(data);
            //console.log(ret);
            if (data < 0) {
                toastr.options.closeButton = true;
                toastr.error("Ha ocurrido un error");
                return;
            }
            for (i = 0; i < ret.length; i++) {
                var id_menu = ret[i]["id_menu"];
                var name_menu = ret[i]["name_menu"];
                //console.log(name_menu);
                loadRow(id_menu);
                cargarMenus(id_menu, name_menu);
            }
        });
    }());

    function loadRow(i) {
        let menu = $("<tr>");
        $(menu).append($("<td>").addClass("id_menu"));
        $(menu).append($("<td>").addClass("menu"));
        $(menu).addClass("row_menu").attr("id", i);
        $("#lista").append(menu);
    }

    function cargarMenus(i, name_menu) {
        var menu = document.getElementById(i),
            $id_menu = menu.getElementsByClassName("id_menu"),
            $name_menu = menu.getElementsByClassName("menu");

        $($id_menu).text(i);
        $($name_menu).text(name_menu);
    }
    $("#lista").on("dblclick", ".row_menu", function() {
        var id = $(this).children(".id_menu").html();
        window.location.href = "user-plans.php?id_menu=" + id;
    });

    function updatePay() {
        var ar = {
            id_user: id_user
        }
        $.post("php/users/changePay1.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                //console.log(data);
                ret = JSON.parse(data);
                //console.log(ret);
                if (data == 1) {
                    console.log("jalo");
                } else{
                    console.log("no jalo");
                }
                    
            });
    }
</script>

</html>