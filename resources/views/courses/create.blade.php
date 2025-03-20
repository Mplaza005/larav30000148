<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


  <h1>Formulario Curso</h1>

    <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
        Ingrese el numero de ficha:
        <br>
        <input type="text" name="numero_ficha">
    </label>
    <br>

    <label>
        Ingrese el programa:
        <br>
        <input type="text" name="programa">
    </label>
    <br>


    <label>
        Ingrese el numero de estudiantes :
        <br>
        <input type="number" name="numero_estudiantes">
    </label>
    <br><br>

    <button type="submit">Enviar Formulario:</button>
    </form>


</body>
</html>
