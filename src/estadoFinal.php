<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
?>
<?php
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    include("conexion.php");
    $msqli = conexion();
    $sql = "UPDATE tarea SET estado='Ejecutada' WHERE id=$id";
    $result=$msqli->query($sql);
    header("location:principal.php?page=1");
}
?>
<?php
}
?>