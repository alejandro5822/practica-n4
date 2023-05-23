<a class="text-center text-3xl font-bold text-red-400 ">LISTA DE TAREAS POR FECHA</a>
<?php
if(isset($_GET['fec_ven1']) && isset($_GET['fec_ven2'])){
    
    $fec_ven1 =  date($_GET['fec_ven1']);
    $fec_ven2 =  date($_GET['fec_ven2']);
        include("conexion.php");
        $msqli = conexion();
        $sql = "select * from tarea where fec_ven >= '$fec_ven1' and fec_ven <= '$fec_ven2' ";
        $table = $msqli->query($sql);

if ($table->num_rows > 0){
    while(list($id, $nom, $des, $fec_reg, $fec_ven, $estado) = mysqli_fetch_array($table)){
        echo " 
            <div class='bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded p-2 m-4' >
                <div class='font-bold text-center border border-black rounded p-3'>$nom</div>
                <div class='font-bold '>Descripcion: $des</div>
                <div class='font-bold '>Fecha Registro: $fec_reg</div>
                <div class='font-bold text-red-300 '>Fecha Vencimiento: $fec_ven</div>
                <div class='font-bold text-red-300 '>Estado: $estado</div>
                <div class='mt-2 flex justify-end'></div>
                <div class='mt-2 flex justify-end'>               
                </div>
            </div>";
    }
}
}
?>
</section>
