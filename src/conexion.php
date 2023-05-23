<?php
function conexion(){
    $mysqli=new mysqli("localhost", "root", "", "practica-no4");
    if($mysqli->connect_errno){
        die("Error: ". $mysqli->connect_error);
    }
    return $mysqli;
}
?>