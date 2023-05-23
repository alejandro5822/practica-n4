        <h1 class="text-3xl text-center  font-bold mb-4">
            Lista de Tareas
        </h1>
        <div class='my-2 mx-4 flex justify-end'>
            <a href="principal.php?page=2" class="rounded-xl bg-green-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-green-600 active:bg-green-700">
                Nueva Tarea
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>    

        <div class='my-2 mx-4 flex justify-end'>          
            <a href="principal.php?page=5" class="rounded-xl bg-orange-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-orange-600 active:bg-orange-700">
                Buscar Pendientes
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path d="M8 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm5 5a3 3 0 101.524 5.585l1.196 1.195a.75.75 0 101.06-1.06l-1.195-1.196A3 3 0 009.5 7z" clip-rule="evenodd" />
                </svg>
            </a>
        </div> 
<section class='grid grid-cols-3 gap-4'>
<?php
include("conexion.php");
$mysqli = conexion();

$sql = "select * from tarea";
$table = $mysqli->query($sql);

if ($table->num_rows > 0){
    while(list($id, $nom, $des, $fec_reg, $fec_ven, $estado) = mysqli_fetch_array($table)){
        echo " 
            <div class='bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded p-2 m-4 ' >
                <div class='font-bold text-center border border-black rounded p-3'>$nom</div>
                <div class='font-bold '>Descripcion: $des</div>
                <div class='font-bold '>Fecha Registro: $fec_reg</div>
                <div class='font-bold text-red-300 '>Fecha Vencimiento: $fec_ven</div>
                <div class='font-bold text-red-300 '>Estado: $estado</div>
                <div class='mt-2 flex justify-end'>
                <a href='principal.php?page=3&id=$id' class='mr-2 rounded-xl bg-orange-500 px-5 py-3 text-base mb-1 font-medium text-white transition duration-200 hover:bg-orange-600 active:bg-orange-700'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10'/>
                    </svg>
                </a>

                <a href='principal.php?page=4&id=$id' class='rounded-xl bg-red-500 px-5 py-3 text-base mb-1 font-medium text-white transition duration-200 hover:bg-red-600 active:bg-red-700'>
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-5 h-5'>
                    <path fill-rule='evenodd' d='M18 5.25a2.25 2.25 0 00-2.012-2.238A2.25 2.25 0 0013.75 1h-1.5a2.25 2.25 0 00-2.238 2.012c-.875.092-1.6.686-1.884 1.488H11A2.5 2.5 0 0113.5 7v7h2.25A2.25 2.25 0 0018 11.75v-6.5zM12.25 2.5a.75.75 0 00-.75.75v.25h3v-.25a.75.75 0 00-.75-.75h-1.5z' clip-rule='evenodd' />
                    <path fill-rule='evenodd' d='M3 6a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V7a1 1 0 00-1-1H3zm6.874 4.166a.75.75 0 10-1.248-.832l-2.493 3.739-.853-.853a.75.75 0 00-1.06 1.06l1.5 1.5a.75.75 0 001.154-.114l3-4.5z' clip-rule='evenodd'/>
                </svg>
              
                </a>
                </div>
                <div class='mt-2 flex justify-end'>               
                </div>
            </div>
        ";
    }
}

mysqli_free_result($table);
mysqli_close($mysqli);
?>
</section>
