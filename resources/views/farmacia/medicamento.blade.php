<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
</head>
<body>

    <h1>Lista de Medicamentos</h1>

    <table border="1" cellspacing="0" cellpadding="6">
        <thead>
            <tr>
                <th>id_medicamento</th>
                <th>nombre</th>
                <th>marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id_medicamento'] }}</td>
                    <td>{{ $post['nombre'] }}</td>
                    <td>{{ $post['marca'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>