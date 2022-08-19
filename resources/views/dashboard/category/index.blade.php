@extends('dashboard.layout')

@section('content')
<a href="{{ route("category.create") }}">Crear un Nuevo Registro</a>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->title}}</td>
            <td>
                <a href="{{ route("category.edit",$c )}}">Editar</a>
                <a href="{{ route("category.show", $c) }}">Ver</a>
                <form action="{{ route("category.destroy", $c) }}" method= "post">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
    </table>
    {{ $categories->links()}}
@endsection