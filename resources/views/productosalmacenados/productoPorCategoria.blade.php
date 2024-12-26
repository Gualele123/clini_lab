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
            @foreach($productosPorCategorias as $productocat)
                <tr>
                    <td>{{ $productocat->id_producto }}</td>
                    <td>{{ $productocat->nombre }}</td>
                    <td>{{ $productocat->codigo_producto }}</td>
                    <td>{{ $productocat->tipo_producto }}</td>
                    <td>{{ $productocat->categoria }}</td>
                    <td>{{ $productocat->eliminado }}</td>
                    <td>{{ $productocat->compuesto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
