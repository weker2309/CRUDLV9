@extends('dashboard.layout')
@section('content')

    <center><h3>Actualizar category "{{$category->title}}".</h3></center>

    @include('dashboard.fragment._errors-front')

        <form action="{{ route('category.update',$category->id) }}" method="post" >
            @method("PUT")

            @include('dashboard.category._form')

        </form>
@endsection