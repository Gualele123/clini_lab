<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>TipoProducto</th>
                <th>Categoria</th>  
                <th>Eliminado</th>  
                <th>Compuesto</th>  
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $product)
                <tr>
                    <td>{{ $product->id_producto }}</td>
                    <td>{{ $product->nombre }}</td>
                    <td>{{ $product->codigo_producto }}</td>
                    <td>{{ $product->tipo_producto }}</td>
                    <td>{{ $product->categoria }}</td>
                    <td>{{ $product->eliminado }}</td>
                    <td>{{ $product->compuesto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
