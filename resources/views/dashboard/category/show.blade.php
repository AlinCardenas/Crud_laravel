@extends('dashboard.layout')
@section('content')

    <a href="{{route('category.index')}}">Regresar</a>
    <h1>{{$category->title}} </h1>
    <p>{{$category->slug}} </p>
    
@endsection