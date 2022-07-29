<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <center><h3>Formulario de registro.</h3></center>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label>Titulo</label>
        <input type="text" name="title">
        <label>Slug</label>
        <input type="text" name="slug">
        <label>Contenido</label>
        <textarea name="content"></textarea>
        <label>Descripción</label>
        <textarea name="description"></textarea>
        <button type="submit">Régistrarme</button>
        
    </form>
</body>
</html>