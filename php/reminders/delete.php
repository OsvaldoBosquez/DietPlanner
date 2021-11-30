<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if (!isset($datos["id_reminder"])) {
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

$sql = "delete from reminders where id_reminder =?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i",$datos["id_reminder"]);

if (!$stmt->execute()) {
    echo -2;
    exit;
}
echo 1;