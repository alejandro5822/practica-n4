<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-center h-40 ">
    <h1 class="text-3xl font-bold tracking-tight text-purple-400 ">Agregando una nueva Tarea</h1>
</div>
<form action="guardaTarea.php" method="get" class="font-bold">
    <label>Nombre:</label>
    <input type="text" name="nom" autocomplete="off">
    <label>Descripcion:</label>
    <input type="text" name="des" autocomplete="off">
    <label>Fecha de Registro</label>
    <input type="date" name="fec_reg">
    <label>Fecha de Vencimiento</label>
    <input type="date" name="fec_ven">
    <button type="submit" class="rounded-xl mt-5 bg-green-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-green-600 active:bg-green-700">
        Registrar
    </button>
</form>