@extends('dashboard.master')
@section('content')
    <h6>Crear Categorías</h6>
    <form action="{{ route('category.store')}}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection