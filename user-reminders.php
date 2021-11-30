<?php include 'header2.php';
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
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
                    <input type="text" id="reminderInput" placeholder="Agrega tu recordatorio">
                    <input type="button" class="boton" id="btn-agregar" value="Agregar Recordatorio">
                </form>
            </div>
        </div>

        <div class="tareas">
            <div class="wrap">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <tbody id="lista">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
require_once "scripts.php";
?>
<script src="js/menu.js"></script>

<script>
    var id_user = "<?php echo json_decode($id_user) ?>";
    (function() {
        var ar = {
            id_user: id_user
        }
        $.post("php/reminders/load.php", {
            data: JSON.stringify(ar)
        }, function(data) {
            var ret = JSON.parse(data);
            console.log(ret);
            if (data < 0) {
                toastr.options.closeButton = true;
                toastr.error("Ha ocurrido un error");
                return;
            }
            for (i = 0; i < ret.length; i++) {
                var info = ret[i]["reminder_info"];
                var id_user = ret[i]["id_user"];
                var id_reminder = ret[i]["id_reminder"];
                loadRow(id_reminder);
                loadReminder(id_reminder, info);
            }
        });
    }());

    function loadRow(i) {
        let reminder = $("<tr>");
        $(reminder).append($("<td>").addClass("reminder").attr("id", i));
        $(reminder).addClass("row_reminder");
        $("#lista").append(reminder);
    }

    function loadReminder(i, info) {
        var reminder = document.getElementById(i);
        $(reminder).text(info);
    }
    // Variables
    /*     var lista = document.getElementById("lista"),
            tareaInput = document.getElementById("tareaInput"),
            btnNuevaTarea = document.getElementById("btn-agregar"); */

    // Funciones

    function addReminder(i) {
        console.log("i " + i)
        var j = parseFloat(i);
        let reminder = $("<tr>");
        $(reminder).append($("<td>").addClass("reminder").attr("id", j + 1));
        $(reminder).addClass("row_reminder");
        $("#lista").append(reminder);
    }

    function getLastIndex() {
        var text = $("#reminderInput").val();
        $.post(
            "php/reminders/getLastIndex.php",
            function(data) {
                var ret = JSON.parse(data);
                //console.log(ret);
                if (ret < 0) {
                    toastr.options.closeButton = true;
                    toastr.error("Ha ocurrido un error");
                    return;
                }
                ret = ret[0];
                lastIndex = ret["id_reminder"];
                console.log("Last index en funci: " + lastIndex);
                addReminder(lastIndex);
                $("#lista").children().last().children().append(text);
            }
        ).fail(function(error) {
            toastr.options.closeButton = true;
            toastr.error("Ha ocurrido un error");
            return;
        });
    }
    var lastIndex;

    function setReminder() {
        var text = $("#reminderInput").val();
        //var lastId = $("#lista").children().last().children().attr("id");
        if (text === "") {
            toastr.options.closeButton = true;
            toastr.error("Ingresa un recordatorio valido");
            return;
        } else {
            getLastIndex();
            //addReminder(lastIndex);
            saveReminder();
            $("#reminderInput").val("");
        }
    }

    function saveReminder() {
        var text = $("#reminderInput").val();
        var ar = {
            reminder_info: text,
            id_user: id_user
        }
        $.post("php/reminders/create.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                //console.log(data);
                ret = JSON.parse(data);
                //console.log(ret);
                toastr.options.closeButton = true;
                if (data == 1) {
                    toastr.success("Recordatorio agregado");
                } else
                    toastr.error("Hubo un error al registrar el recordatorio");
            });
    }
    $("#btn-agregar").click(setReminder);

    $("#lista").on("dblclick", ".row_reminder", function() {
        var id_reminder = $(this).children().attr("id");
        var ar = {
            id_reminder: id_reminder
        }
        $.post("php/reminders/delete.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                //console.log(data);
                ret = JSON.parse(data);
                //console.log(ret);
                toastr.options.closeButton = true;
                if (data == 1) {
                    toastr.success("Recordatorio eliminado");
                } else
                    toastr.error("Hubo un error al eliminar el recordatorio");
            });
        $(this).remove();
    });


    /*     var agregarTarea = function() {
            var tarea = tareaInput.value,
                nuevaTarea = document.createElement("li"),
                enlace = document.createElement("a"),
                contenido = document.createTextNode(tarea);

            if (tarea === "") {
                tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
                tareaInput.className = "error";
                return false;
            }

            // Agregamos el contenido al enlace
            enlace.appendChild(contenido);
            // Le establecemos un atributo href
            enlace.setAttribute("href", "#");
            // Agrergamos el enlace (a) a la nueva tarea (li)
            nuevaTarea.appendChild(enlace);
            // Agregamos la nueva tarea a la lista
            lista.appendChild(nuevaTarea);

            tareaInput.value = "";
    		for (var i = 0; i <= lista.children.length -1; i++) {
    			lista.children[i].addEventListener("click", function(){
    				this.parentNode.removeChild(this);
                    console.log("Se elimino el row "+ this);
    			});
    		}
            var ar = {
                reminder_info: tarea,
                id_user: id_user
            }
             $.post("php/reminders/create.php", {
                    data: JSON.stringify(ar)
                },
                function(data) {
                    //console.log(data);
                    ret = JSON.parse(data);
                    //console.log(ret);
                    toastr.options.closeButton = true;
                    if (data == 1) {
                        toastr.success("Recordatorio agregado");
                    } else
                        toastr.error("Hubo un error al registrar el recordatorio");
                });

        };
         var comprobarInput = function() {
            tareaInput.className = "";
            teareaInput.setAttribute("placeholder", "Agrega tu tarea");
        }; 


        var eleminarTarea = function() {
            console.log(this);
            this.parentNode.removeChild(this);
        };

        // Eventos

        // Agregar Tarea
        btnNuevaTarea.addEventListener("click", agregarTarea);

        // Comprobar Input
        tareaInput.addEventListener("click", comprobarInput);

        // Borrando Elementos de la lista
        for (var i = 0; i <= lista.children.length - 1; i++) {
                lista.children[i].addEventListener("click", eleminarTarea);
            }  */
</script>

</html>