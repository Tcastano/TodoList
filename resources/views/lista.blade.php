<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <ol class="list-group list-group-numbered">
        <ul>Tarea completada</ul>
        @foreach($todas_las_tareas as $tarea)
        <li class="list-group-item">
            {{$tarea->nombre}}
            <form action="{{ route('tareaCompletada', $tarea->id) }}" method="POST" class="float-end">
                @csrf
                @method('DELETE')
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="completada" id="tarea_{{ $tarea->id }}" onchange="this.form.submit()" {{ $tarea->completada ? 'checked' : '' }}>
                    <label class="form-check-label" for="tarea_{{ $tarea->id }}"></label>
                </div>
            </form>
        </li>
        @endforeach
    </ol>

    <div div class="container align-items-start mt-5">
        <form class="form-border" action="{{ route('añadirTareas') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre_tarea">Añadir Nueva Tarea</label>
                <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Escribe aquí">
            </div><br>
            <button type="submit" class="btn btn-success">Añadir</button>
        </form>
    </div>
</body>

</html>