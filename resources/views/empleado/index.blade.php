<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Empleados</h1>

    <a href="empleado/create">Crear Empleado</a>
    <table> 
    <thead>
        <tr>
            <td>Id</td>
            <td>Codigo Empleado</td>
            <td>Nombre Empleado</td>
            <td>Puesto Empleado</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>  
    </thead>
    <tbody>
    @foreach($dEmpleados as $empleado)
    <tr>
        <td>{{ $empleado->id }}</td>
        <td>{{ $empleado->codigoEmpleado }}</td>
        <td>{{ $empleado->nombreEmpleado }}</td>
        <td>{{ $empleado->puestoEmpleado }}</td>
        <td><a href="/empleado/{{$empleado->id}}/edit">Editar</a></td>
        <td><a href="/empleado/{{$empleado->id}}">Eliminar</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>