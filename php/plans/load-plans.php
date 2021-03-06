<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if(!isset($datos["id_menu"]) && !isset($datos["id_user"])){
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

if (isset($datos["id_menu"])) {
    $sql = "select * from view_menu_dias where id_menu=? and id_user = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ii", $datos["id_menu"], $datos["id_user"]);
}


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
?>