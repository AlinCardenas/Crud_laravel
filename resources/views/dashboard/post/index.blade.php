@extends('dashboard.layout')

@section('content')
    <h1>Index</h1>
    <a href="{{route('post.create')}}">Crear</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{-- {{$post->category}} --}}</td>
                    <td>{{$post->posted}}</td>
                    <td>
                        <a href="{{route('post.show',$post)}}">Ver</a>
                        <a href="{{route('post.edit',$post)}}">Editar</a>
                        <form action="{{route('post.destroy',$post)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach

        </tbody>
    </table>
    {{$posts->links()}}

@endsection