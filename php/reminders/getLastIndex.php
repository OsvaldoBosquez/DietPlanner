<?php

require_once "../private/autoloader.php";

$conexion = DB::obtenerConexion();

$sql = "SELECT id_reminder FROM reminders ORDER BY id_reminder DESC LIMIT 1";
$stmt = $conexion->prepare($sql);



if ($stmt->execute()) {
    $res = $stmt->get_result();
    $ar = [];
    while ($data = $res->fetch_assoc()) {
        array_push($ar, $data);
    }
    echo json_encode($ar);
    exit;
}
echo -2;