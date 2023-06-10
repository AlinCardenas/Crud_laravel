@extends('dashboard.layout')

@section('content')
    <h1>Editar</h1>
    @include('dashboard.fragment.errors')

    <form action="{{route('category.update', $category)}}" method="post">
        @method('put')
        @include('dashboard.category.form')
    </form>
@endsection