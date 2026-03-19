<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>Editar Empleado</h1>

    <body>
        <form action="/empleado/{{$empleadoE->id}}" method="POST">
                @csrf
                @method('PUT')
            <label for="codigo">Codigo Empleado</label>
            <input type="text" name="codigoEmpleado" id="codigoEmpleado" value="{{$empleadoE->codigoEmpleado}}"> 

            <label for="nombre">Nombre Empleado</label>
            <input type="text" name="nombreEmpleado" id="nombreEmpleado" value="{{$empleadoE->nombreEmpleado}}">

            <label for="puesto">Puesto Empleado</label>
            <input type="text" name="puestoEmpleado" id="puestoEmpleado" value="{{$empleadoE->puestoEmpleado}}">

            <button type="submit">Guardar Cambios</button>
        </form>
    </body>
</html>