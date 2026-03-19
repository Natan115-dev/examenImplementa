<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Afiliado</h1>

    <form action="/afiliado" method="POST">
        @csrf

        <label for="codigo">Codigo Afiliado</label>
        <input type="text" name="codigoAfiliado" id="codigoEmpleado">

        <label for="nombre">Nombre Afiliado</label>
        <input type="text" name="nombreEmpleado" id="nombreEmpleado">

        <label for="puesto">Direccion Afiliado</label>
        <input type="text" name="puestoEmpleado" id="puestoEmpleado">

        <button type="submit">Guardar Empleado</button>
    </form>
</body>
</html>