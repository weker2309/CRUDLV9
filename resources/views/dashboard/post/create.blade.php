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
        <br />
        <label>Slug</label>
        <input type="text" name="slug">
        <br />
        <label>Contenido</label>
        <textarea name="content"></textarea>
        <br />
        <label>Descripción</label>
        <textarea name="description"></textarea>
        <br />
        <label>Categoria:</label>
        <select name="category_id">
            <option value=""></option>
                @foreach ($categorie as $title => $id)
                    <option value="{{$id}}">{{ $title}}</option>
                @endforeach
            
        </select>
        <br />
        <label>Posted</label>
        <select name="posted">
            <option value="yes">Yes</option>
            <option value="Not">Not</option>
        </select>
        <br />
        <button type="submit">Régistrarme</button>
        
    </form>
</body>
</html>