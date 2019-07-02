<!DOCTYPE html>
<html>
<head>
<title>Crear entrenador</title>
</head>
<body>
    <h1>Crear entrenador</h1>
    <form method="POST" action="{{ route('trainers.store') }}">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name">
        <br>
        <label for="">Pueblo</label>
        <select name="town_id" id="">
            @foreach ($towns as $town)
                <option value="{{ $town->id }}">{{ $town->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
