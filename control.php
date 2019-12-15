<?php
$__bin__ = $_GET["_bin"];

if ($__bin__ != "index") {
    $__c__ = explode("_", $_GET["c"]);
    $__c__ = $__c__[0];
}

//Session expira
// setcookie("PHPSESSID",session_id() ,time()+10000);
// session_start();

$_DIR = __DIR__;
$_DIR_BIN = $_DIR . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR;
$_DIR_VIS = $_DIR . DIRECTORY_SEPARATOR . "vis" . DIRECTORY_SEPARATOR;
$_DIR_DAT = $_DIR . DIRECTORY_SEPARATOR . "dat" . DIRECTORY_SEPARATOR;
$_DIR_OBJ = $_DIR . DIRECTORY_SEPARATOR . "obj" . DIRECTORY_SEPARATOR;
$_DIR_CFG = $_DIR . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR;

//Conexion a BD
include_once($_DIR_CFG . "cfg_conn.php");
// Mod guarda datos de sesión en variables para su uso
// include_once($_DIR_BIN."mod_session.php");


header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

if ($__bin__ == "index") {
    include_once("index.php");
    exit(0);
} elseif ($__bin__ != "index" && $__c__ == "bin") {
    $url = $_DIR_BIN . $__bin__ . ".php";
    include_once($url);
    exit(0);
}
