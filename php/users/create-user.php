<?php

require_once "../private/autoloader.php";

$data = json_decode($_POST["data"], true);

$password = password_hash($data["password"], PASSWORD_DEFAULT);

if(!isset($data["user"]) || !isset($password)){
    echo -1;
    exit;
}

$sql = "insert into users set user=?, password=?";

$conexion = DB::obtenerConexion();

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $data["user"], $password);
if(!$stmt->execute()){
    echo -2;
    exit;
}
echo 1;
