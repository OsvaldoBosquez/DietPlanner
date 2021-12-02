<?php
    require_once "../private/autoloader.php";

    $datos = json_decode($_POST["data"],true);

    if(!isset($datos["id_user"]) && !isset($datos["offset"])){
        echo -1;
        exit;
    }

    $short = !isset($datos["id_user"]) ? "id_user, user" : "*";

    $conexion = DB::obtenerConexion();

    if(isset($datos["id_user"])){
        $sql = "select * from users where id_user = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $datos["id_user"]);
    }else{
        $sql = "select $short from users limit 10 offset ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $offset);
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