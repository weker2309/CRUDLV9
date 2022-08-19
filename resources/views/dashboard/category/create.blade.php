@extends('dashboard.layout')
@section('content')
    <center><h3>Formulario de registro.</h3></center>
    @include('dashboard.fragment._errors-front')
        <form action="{{ route('category.store') }}" method="post">
         @include('dashboard.category._form')
        </form>
@endsection