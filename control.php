<?php
$__bin__ = $_GET["_bin"];

if ($__bin__ != "index") {
    $__c__ = explode("_", $_GET["c"]);
    $__c__ = $__c__[0];
}
// echo "<br>", $__bin__, "<br>";
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// echo "<br> __c__: ", $__c__, "<br>";

//Session expira
// setcookie("PHPSESSID",session_id() ,time()+10000);
// session_start();

$_DIR = __DIR__;
$_DIR_BIN = $_DIR . DIRECTORY_SEPARATOR . "bin" . DIRECTORY_SEPARATOR;
$_DIR_VIS = $_DIR . DIRECTORY_SEPARATOR . "vis" . DIRECTORY_SEPARATOR;
$_DIR_DAT = $_DIR . DIRECTORY_SEPARATOR . "dat" . DIRECTORY_SEPARATOR;
$_DIR_OBJ = $_DIR . DIRECTORY_SEPARATOR . "obj" . DIRECTORY_SEPARATOR;
// $_DIR_CFG = $_DIR . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR;

//Conexion a BD
$usr = 'admin';
$pass = '12125050.DnD';
$server = '127.0.0.1';
$bd = 'proyectoSoto';

$conn = new mysqli($server, $usr, $pass, $bd);

if ($conn->connect_errno) {
    // echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    echo "<!-- Fallo al conectar a MySQL -->";
} 
else {
    // $conn->set_charset("utf8");
    echo "<!-- Conexion exitosa -->";
}

// $qr = "select * from usuarios";
$qr = "show tables";
$res = $conn->query($qr);

while($row = mysqli_fetch_row($res)){
    $regs[] = $row;
}
echo"<pre>";
print_r($regs);
echo "</pre>";

exit(0);
// include_once($_DIR_CFG."cfg_conn.php");
// include_once("config/configuracion.php");
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
