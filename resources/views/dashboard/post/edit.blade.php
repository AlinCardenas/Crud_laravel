@extends('dashboard.layout')

@section('content')
    <h1>Actualizar {{$post->title}} </h1>
    @include('dashboard.fragment.errors')
    <form action="{{route('post.update', $post)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('dashboard.post.form')
    </form>
    
@endsection