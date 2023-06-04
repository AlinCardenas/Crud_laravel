@extends('dashboard.layout')

@section('content')
    <h1>Crear</h1>

    @include('dashboard.fragment.errors')

    <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
       @include('dashboard.post.form')
    </form>
    
@endsection