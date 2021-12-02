<?php

require_once "../private/autoloader.php";

$data = json_decode($_POST["data"], true);


if(!isset($data["id_user"])){
    echo -1;
    exit;
}

$sql = "UPDATE users SET validation=1 WHERE id_user = ?";

$conexion = DB::obtenerConexion();

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $data["id_user"]);
if(!$stmt->execute()){
    echo -2;
    exit;
}
echo 1;