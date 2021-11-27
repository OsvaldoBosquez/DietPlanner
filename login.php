<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/logInStyle.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="index">
            <a href="index.php">DietPlanner</a>
        </div>
    </header>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                            <div class="login">
                                <div class="group"> <label for="user" class="label">Nombre de Usuario</label> <input id="user" type="text" class="input" placeholder="Enter your username"> </div>
                                <div class="group"> <label for="pass" class="label">Contraseña</label> <input id="password" type="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                                <div class="group"> <input type="submit" class="button" value="Ingresar" id="btn-login"> </div>
                                <div class="hr"></div>
                                <div class="foot"> <a href="#">Olvidaste tu Contraseña?</a> </div>
                            </div>
                            <div class="sign-up-form">
                                <div class="group"> <label for="user" class="label">Nombre de Usuario</label> <input id="userSingUp" type="text" class="input" placeholder="Nombre de Usuario"> </div>
                                <div class="group"> <label for="pass" class="label">Contraseña</label> <input id="passwordSingUp" type="password" class="input" data-type="password" placeholder="Crea tu contraseña"> </div>
                                <div class="group"> <label for="pass" class="label">Confirma Contraseña</label> <input id="password-confirm" type="password" class="input" data-type="password" placeholder="Confirma tu contraseña"> </div>
                                <div class="group"> <input type="submit" class="button" value="Registrarse" id="btn-singUp"> </div>
                                <div class="hr"></div>
                                <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    require_once "scripts.php";
?>
<script>
    function validarLogin() {
        var ar = {
            user: $("#user").val(),
            password: $("#password").val()
        }
        $.post(
            "php/session/validate-login.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                toastr.options.closeButton = true;
                if (data == -1) {
                    toastr.error("Hubo un error");
                } else if (data == 1) {
                    location.href = "user.php";
                } else if (data == -2) {
                    toastr.warning("Usuario o contraseña incorrectos");
                }
            }
        );
    }
    $("#btn-login").click(validarLogin);

    function createUser() {
        var ar = {
            user: $("#userSingUp").val(),
            password: $("#passwordSingUp").val()
        };
        console.log(ar);
          $.post(
            "php/users/create-user.php", {
                data: JSON.stringify(ar)
            },
            function(data) {
                console.log(data);
                toastr.options.closeButton = true;
                if (data == 1) {
                    toastr.success("Usuario registrado correctamente.");
                    location.href = "index.php";
                } else {
                    toastr.error("Hubo un error.");
                }
            }
        ); 
    }
    $("#btn-singUp").click(createUser);
</script>

</html>