<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if(!isset($datos["menu_name"])){
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

if (isset($datos["menu_name"])) {
    $sql = "SELECT id_menu FROM menu_plans WHERE name_menu LIKE ?";
    $stmt = $conexion->prepare($sql);
    $datos["menu_name"] = "%".$datos["menu_name"]."%";
    $stmt->bind_param("s", $datos["menu_name"]);
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