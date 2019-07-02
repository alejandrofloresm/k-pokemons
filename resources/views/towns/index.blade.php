<!DOCTYPE html>
<html>
<head>
<title>Pueblos</title>
</head>
<body>
    <h1>Pueblos</h1>
    <a href="{{ route('towns.create') }}">Crear pueblo</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        @foreach($towns as $town)
        <tr>
            <td>{{ $town->id }}</td>
            <td>{{ $town->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
