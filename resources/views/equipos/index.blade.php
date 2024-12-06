<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipos</title>
</head>

<body>
    <h1>
        Equipos de futbol
    </h1>
    <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Liga</th>
            <th>País</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($equipos as $equipo)
        <tr>
            <td>{{$equipo->nombre}}</td>
            <td>{{$equipo->ligaf->liga ?? "no tiene liga"}}</td>
            <td></td>
        </tr>
        @endforeach

    </tbody>
</table>
</body>

</html>
