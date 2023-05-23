<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        include("conexion.php");
    $mysqli = conexion();
    $sql = "select * from tarea where id=$id";
    $table = $mysqli->query($sql);
    if ($table->num_rows > 0){
        while(list($id, $nom, $des, $fec_reg, $fec_ven) = mysqli_fetch_array($table)){
?>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-center h-40 ">
    <h1 class="text-3xl font-bold tracking-tight text-purple-400 ">Modificar Tarea planteada</h1>
</div>
<form action="modificaTarea.php" method="get" class="font-bold">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label >Nombre:</label>
    <input type="text" name="nom" value="<?php echo $nom; ?>" autocomplete="off">
    <label>Descripcion:</label>
    <input type="text" name="des" value="<?php echo $des; ?>" autocomplete="off">
    <input type="hidden" name="fec_reg" value="<?php echo $fec_reg; ?>">
    <label>Fecha de Vencimiento:</label>
    <input type="date" name="fec_ven" value="<?php echo $fec_ven; ?>">
    <button type="submit" class="mx-10  rounded-xl bg-green-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-green-600 active:bg-green-700">
        Modificar
    </button>
</form>
<?php
        }
    }
}
?>