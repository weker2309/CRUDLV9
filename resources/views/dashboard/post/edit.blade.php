@extends('dashboard.layout')
@section('content')
    <center><h3>Actualizar registro "{{$post->title}}".</h3></center>
    @include('dashboard.fragment._errors-front')
        <form action="{{ route('post.update',$post->id) }}" method="post">
            @csrf

            @method("PUT")
            <label>Titulo</label>
            <input type="text" name="title"  value="{{ $post->title}}">
            <br />

            <label>Slug</label>
            <input type="text" name="slug" value="{{ $post->slug}}">
            <br />

            <label>Contenido</label>
            <textarea name="content">{{ $post->content}}</textarea>
            <br />

            <label>Descripción</label>
            <textarea name="description" >{{ $post->description}}</textarea>
            <br />

            <label>Categoria:</label>
            <select name="category_id">
                <option value=""></option>
                    @foreach ($categorie as $title => $id)
                        <option  {{ $post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{ $title}}</option>
                    @endforeach
                
            </select>
            <br />

            <label>Posted</label>
            <select name="posted">
                <option></option>
                <option {{ $post->posted == "not" ? 'selected' : '' }}>NO</option>
                <option {{ $post->posted == "yes" ? 'selected' : '' }} value="yes">Yes</option>
                
            </select>
            <br />

            <button type="submit">Régistrarme</button>
        </form>
@endsection