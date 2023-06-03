@extends('dashboard.layout')

@section('content')
    <h1>Actualizar {{$post->title}} </h1>
    @include('dashboard.fragment.errors')
    <form action="{{route('post.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titulo</label>
        <input type="text" name="title" value="{{$post->title}}" >

        <label for="">Categoria</label>
        <select name="category_id" >
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id==$id ? 'selected' :''}} value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>

        <label for="">Postd</label>
        <select name="posted" id="" value="">
            <option {{ $post->posted ? 'yes' :''}} value="yes">Yes</option>
            <option {{ $post->posted ? 'no' :'No'}}value="not">No</option>

        </select>

        <label for="contenido">Contenido</label>
        <textarea name="content">={{$post->content}}</textarea>

        <label for="description">description</label>
        <textarea name="description" >{{$post->description}}</textarea>
        
        <button type="submit">Enviar</button>
    </form>
    
@endsection