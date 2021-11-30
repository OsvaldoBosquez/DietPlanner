<?php
    require_once "../private/autoloader.php";

    $datos = json_decode($_POST["data"],true);

    if(!isset($datos["id_user"])){
        echo -1;
        exit;
    }

    $conexion = DB::obtenerConexion();

    if(isset($datos["id_user"])){
        $sql = "select * from reminders where id_user = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $datos["id_user"]);
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