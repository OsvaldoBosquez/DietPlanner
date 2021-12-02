<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if (!isset($datos["id_dia"]) && !isset($datos["id_desayuno"]) && !isset($datos["id_colacion1"]) && !isset($datos["id_colacion2"])
&& !isset($datos["id_cena"]) && !isset($datos["id_comida"]) && !isset($datos["id_menu"])) {
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

$sql = "insert into menu_dias(id_dia,id_desayuno,id_colacion1,id_colacion2,id_cena,id_comida,id_menu) values(?,?,?,?,?,?,?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("iiiiiii", $datos["id_dia"], $datos["id_desayuno"], $datos["id_colacion1"], $datos["id_colacion2"], $datos["id_cena"], $datos["id_comida"], $datos["id_menu"]);

if (!$stmt->execute()) {
    echo -2;
    exit;
}
echo 1;