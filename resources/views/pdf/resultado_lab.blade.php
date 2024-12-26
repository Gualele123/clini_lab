<!DOCTYPE html>
<html>
<head>
    <title>Datos JSON en PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Datos JSON en PDF</h1>
    <table>
        <thead>
            <tr>
                <th>fechaActual</th>
                <th>horaActual</th>
                <th>usuarioLogeado</th>
                <th>nombreEmpresa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($report_data as $item)
                <tr> 
                    <td>{{ $item['fechaActual'] }}</td>
                    <td>{{ $item['horaActual'] }}</td>
                    <td>{{ $item['usuarioLogeado'] }}</td>
                    <td>{{ $item['nombreEmpresa'] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
