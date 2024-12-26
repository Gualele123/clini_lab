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
            @foreach($productosTEs as $productoTE)
                <tr>
                    <td>{{ $productoTE->id_producto }}</td>
                    <td>{{ $productoTE->nombre }}</td>
                    <td>{{ $productoTE->codigo_producto }}</td>
                    <td>{{ $productoTE->tipo_producto }}</td>
                    <td>{{ $productoTE->categoria }}</td>
                    <td>{{ $productoTE->eliminado }}</td>
                    <td>{{ $productoTE->compuesto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
