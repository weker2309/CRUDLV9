@extends('dashboard.layout')
@section('content')

    <center><h3>Actualizar registro "{{$post->title}}".</h3></center>

    @include('dashboard.fragment._errors-front')

        <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
            @method("PUT")

            @include('dashboard.post._form',["task" => "edit"])

        </form>
@endsection