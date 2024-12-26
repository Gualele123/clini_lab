<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>codigo_producto</th>
                <th>tipo_producto</th>
                <th>categoria</th>
                <th>eliminado</th>
                <th>compuesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id_producto }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->codigo_producto }}</td>
                    <td>{{ $producto->tipo_producto }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->eliminado }}</td>
                    <td>{{ $producto->compuesto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
