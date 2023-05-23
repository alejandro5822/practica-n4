<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-center h-40 ">
    <h1 class="text-3xl font-bold tracking-tight text-purple-400 ">Buscar Tareas por Fechas indique</h1>
</div>
<form action="principal.php" method="get" class="font-bold mx-72   ">
    <input type="hidden" name="page" value="6">
    <label>Fecha Inicial= </label>
    <input type="date" name="fec_ven1">
    <label>Fecha Final= </label>
    <input type="date" name="fec_ven2">
    <button type="submit" class="mx-10  rounded-xl bg-green-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-green-600 active:bg-green-700">
        Generar
    </button>
</form>