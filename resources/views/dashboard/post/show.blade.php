@extends('dashboard.layout')
@section('content')

    <center><h3>Registro: "{{$post->title}}".</h3></center>
    <table>
        <thead>
            <tr>
                <th>Titulo  </th>
                <th>Posted</th>
                <th>Contenido</th>
                <th>Descripción</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category_id}}</td>
                </tr>
            
        </tbody>
    </table>
    
@endsection