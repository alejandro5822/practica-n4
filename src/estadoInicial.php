<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        include("conexion.php");
    $mysqli = conexion();
    $sql = "select * from tarea where id=$id";
    $table = $mysqli->query($sql);
    if ($table->num_rows > 0){
        while(list($id, $nom, $des, $fec_reg, $fec_ven, $estado) = mysqli_fetch_array($table)){
?>
<form action="" method="get">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="nom" value="<?php echo $nom; ?>" autocomplete="off">  
    <input type="hidden" name="des" value="<?php echo $des; ?>" autocomplete="off">
    <input type="hidden" name="fec_reg" value="<?php echo $fec_reg; ?>">   
    <input type="hidden" name="fec_ven" value="<?php echo $fec_ven; ?>">
    <label>Estado de la practica:</label>
    <input type="enum" name="estado" value="<?php echo $estado; ?>">
    <button type="submit">
        Registrar
    </button>
</form>
<?php
        }
    }
}
?>