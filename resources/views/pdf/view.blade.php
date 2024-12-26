

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Personas</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <table border="1" cellspacing="0" cellpadding="6">
        <thead>
            <tr>
                <th>Laboratorio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report_data as $persona)
                <tr>
                    <td>{{ $persona['laboratorio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
