<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Empleado</h1>

    <form action="/empleado" method="POST">
        @csrf

        <label for="codigo">Codigo Empleado</label>
        <input type="text" name="codigoEmpleado" id="codigoEmpleado">

        <label for="nombre">Nombre Empleado</label>
        <input type="text" name="nombreEmpleado" id="nombreEmpleado">

        <label for="puesto">Puesto Empleado</label>
        <input type="text" name="puestoEmpleado" id="puestoEmpleado">

        <button type="submit">Guardar Empleado</button>
    </form>
</body>
</html>