@extends('dashboard.layout')

@section('content')
<a href="{{ route("post.create") }}">Crear un Nuevo Registro</a>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->category_id}}</td>
            <td>{{$p->posted}}</td>
            <td>
                <a href="{{ route("post.edit",$p->id )}}">Editar</a>
                <a href="{{ route("post.show", $p->id) }}">Ver</a>
                <form action="{{ route("post.destroy", $p->id) }}" method= "post">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
    </table>
    {{ $post->links()}}
@endsection