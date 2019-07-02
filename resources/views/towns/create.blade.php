<!DOCTYPE html>
<html>
<head>
<title>Crear pueblo</title>
</head>
<body>
    <h1>Crear pueblo</h1>
    <form method="POST" action="{{ route('towns.store') }}">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
