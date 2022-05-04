<?php
function conectar(){
$xc =mysqli_connect("localhost","root","","mysqprueba");
return $xc;
die();    
}

function desconectar($xc){

$xc =mysqli_close($xc);    
}

$xc =conectar();
$sql ="SELECT * FROM alumnos";
$res =mysqli_query($xc , $sql);
desconectar($xc);

$filas =mysqli_fetch_array($res);

while($filas =mysqli_fetch_array($res)){
    $id = $filas["idalumnos"];
    $nombre = $filas["nombres"];
    $apellido = $filas["apellidos"];
    echo $id."<br>";
    echo $nombre."<br>";
    echo $apellido."<br>";
}

?>