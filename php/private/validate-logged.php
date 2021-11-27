<?php

require_once "autoloader.php";

if(!isset($_SESSION["user"]) || !isset($_SESSION["id_user"])){
    header("location: login.php");
    exit;
}