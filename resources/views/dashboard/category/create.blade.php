@extends('dashboard.layout')

@section('content')
    <h1>crear</h1>
    @include('dashboard.fragment.errors')
    <form action="{{route('category.store')}}" method="post">
        @method('POST')
        @include('dashboard.category.form')
    </form>
@endsection