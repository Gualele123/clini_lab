<!DOCTYPE html>
<html>
<head>
    <title>Información del Sistema</title>
</head>
<body>
    <h1>Información del Sistema</h1>
    <p><strong>Nombre de Usuario:</strong> {{ $username }}</p>
    <p><strong>Nombre Completo del Usuario:</strong> {{ $fullName }}</p>
    <p><strong>Nombre del Equipo:</strong> {{ $hostname }}</p>
    <p><strong>Dirección IP del Equipo:</strong> {{ $ipAddress }}</p> 
    <p><strong>URL Actual:</strong> {{ $currentUrl }}</p>

    @if($authUser) 
        <h2>Usuario Autenticado</h2> 
        <p><strong>Nombre:</strong> {{ $authUser->name }}</p> 
        <p><strong>Email:</strong> {{ $authUser->email }}</p> 
    @else 
        <p>No hay usuario autenticado.</p> 
    @endif

</body>
</html>
