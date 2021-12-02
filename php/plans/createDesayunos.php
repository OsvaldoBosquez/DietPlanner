<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if (!isset($datos["info"])) {
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

$sql = "insert into desayunos(info) values(?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $datos["info"]);

if (!$stmt->execute()) {
    echo -2;
    exit;
}
echo 1;