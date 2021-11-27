<?php
/*
return 
    1 = data correct
    -1 = missing information
    -2 = user or password wrong 
*/

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if(!isset($datos["user"]) || !isset($datos["password"])){
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

$sql = "select * from users where user=?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $datos["user"]);

$stmt->execute();

$res = $stmt->get_result();

if($res->num_rows == 0){
    echo -2;
    exit;
}

$data = $res->fetch_assoc();

$password = $data["password"];

if(password_verify($datos["password"], $password)){
    $user = $datos["user"];
    $idUser = $data["id_user"];
    require "login.php";
    exit;
}

echo -2;
?>