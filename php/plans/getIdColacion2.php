<?php

require_once "../private/autoloader.php";

$datos = json_decode($_POST["data"], true);

if(!isset($datos["info"])){
    echo -1;
    exit;
}

$conexion = DB::obtenerConexion();

if (isset($datos["info"])) {
    $sql = "SELECT id_colacion2 FROM colacion2 WHERE info LIKE ?";
    $stmt = $conexion->prepare($sql);
    $datos["info"] = "%".$datos["info"]."%";
    $stmt->bind_param("s", $datos["info"]);
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