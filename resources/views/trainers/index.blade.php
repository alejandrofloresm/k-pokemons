<!DOCTYPE html>
<html>
<head>
<title>Entrenadores</title>
</head>
<body>
    <h1>Entrenadores</h1>
    <a href="{{ route('trainers.create') }}">Crear entrenador</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Pueblo</th>
        </tr>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->id }}</td>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->town->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
