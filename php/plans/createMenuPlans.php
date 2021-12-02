<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if (!isset($datos["name_menu"]) && !isset($datos["id_user"])) {
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

$sql = "insert into menu_plans(name_menu, id_user) values(?,?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("si", $datos["name_menu"],$datos["id_user"]);

if (!$stmt->execute()) {
    echo -2;
    exit;
}
echo 1;
