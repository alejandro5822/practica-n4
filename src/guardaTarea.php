<?php
if(isset($_GET['nom']) && isset($_GET['des']) && isset($_GET['fec_reg']) && isset($_GET['fec_ven'])){
    $nom =  $_GET['nom'];
    $des =  $_GET['des'];
    $fec_reg =  $_GET['fec_reg'];
    $fec_ven =  $_GET['fec_ven'];
    include("conexion.php");
    $msqli = conexion();
    $sql = "INSERT INTO tarea(nom, des, fec_reg, fec_ven) values('$nom', '$des', '$fec_reg', '$fec_ven')";
    $result = $msqli->query($sql);
    header("location: principal.php?page=1");
}
?>