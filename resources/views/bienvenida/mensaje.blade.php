<!DOCTYPE html>
<html>
<head>
    <title>URL and User Info</title>
</head>
<body>
    <h1>URL Actual</h1>
    <p>{{ $currentUrl }}</p>

    <h1>Información del Usuario</h1>
    @if($user)
        <p>Nombre: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    @else
        <p>No hay usuario autenticado.</p>
    @endif
</body>
</html>
