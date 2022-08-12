@extends('dashboard.layout')
@section('content')
    <center><h3>Formulario de registro.</h3></center>
    @include('dashboard.fragment._errors-front')
        <form action="{{ route('post.store') }}" method="post">
         @include('dashboard.post._form')
        </form>
@endsection