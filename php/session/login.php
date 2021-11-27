<?php 

if(!isset($user) || !isset($idUser)){
    echo -3;
    exit;
}

$_SESSION["user"] = $user;
$_SESSION["id_user"] = $idUser;

echo 1;
?>