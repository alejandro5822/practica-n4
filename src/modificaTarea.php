<?php
if (isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['des']) && isset($_GET['fec_reg']) && isset($_GET['fec_ven'])){
    $id =  $_GET['id'];
    $nom =  $_GET['nom'];
    $des =  $_GET['des'];
    $fec_reg =  date($_GET['fec_reg']);
    $fec_ven =  date($_GET['fec_ven']);
    include("conexion.php");
    $msqli = conexion();
    $sql = "UPDATE tarea SET nom='$nom', des='$des', fec_ven='$fec_ven' WHERE id=$id";
    $result=$msqli->query($sql);
    header("Location:principal.php?page=1");
}
?>