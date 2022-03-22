<?php

//inscripciones cerradas
// echo "cerrada";
// exit;

include('conexion.php');
$cn = db_connect();

$nombres = trim(strtoupper($_POST["nombres"]));
$apellidos = trim(strtoupper($_POST["apellidos"]));
$dni = trim($_POST["dni"]);
$celular = trim($_POST["celular"]);
$correo = trim($_POST["correo"]);
$carrera = isset($_POST["carrera"]) ? $_POST["carrera"] : "";
$curso = isset($_POST["curso"]) ? $_POST["curso"] : "";

$sql = "SELECT dni FROM tiktok_registrados WHERE dni = '" . $dni . "'";
$selectResult = mysqli_query($cn, $sql);
if ($selectResult == false) {echo "error"; exit; }
if (mysqli_num_rows($selectResult) > 0) {
    mysqli_free_result($selectResult); 
    echo "exists"; 
    exit;
}

$insertResult = "INSERT INTO tiktok_registrados (nombres,apellidos,dni,celular,correo,carrera,curso,fecregistro) VALUES ('$nombres','$apellidos','$dni','$celular','$correo','$carrera','$curso',NOW())";
mysqli_query($cn, $insertResult);
if ($insertResult == false) {echo "error"; exit;}  
echo "true";
