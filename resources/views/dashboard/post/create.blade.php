@extends('dashboard.layout')

@section('content')
    <h1>Crear</h1>
    @include('dashboard.fragment.errors')
    <form action="{{ route('post.store')}}" method="post">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" value="{{old('title','')}}">

        {{-- <label for="slug">Slug</label>
        <input type="text" name="slug" > --}}

        <label for="">Categoria</label>
        <select name="category_id" >
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option "{{ old("category_id","") == $id ? 'selected' :''}}" value="{{$id}}">{{$title}} </option>
            @endforeach
        </select>

        <label for="">Postd</label>
        <select name="posted" id="">
            <option {{ old("posted","") == 'yes'? 'selected' :''}} value="yes">Yes</option>
            <option {{ old("posted","") == 'no' ? 'selected' :''}} value="not">No</option>

        </select>

        <label for="contenido">Contenido</label>
        <textarea name="content" >{{old('content','')}}</textarea>

        <label for="description">description</label>
        <textarea name="description" >{{old('description','')}}</textarea>
        
        <button type="submit">Enviar</button>
    </form>
    
@endsection