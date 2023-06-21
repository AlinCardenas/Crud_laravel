@extends('dashboard.layout')

@section('content')
<a class="btn btn-primary"  href="{{route('post.create')}}">Crear</a>  
    <table class="table">
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
                    <td>{{$post->category->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td>
                        <a class="btn btn-success my-2"  href="{{route('post.edit',$post)}}">Editar</a>
                        <a class="btn btn-warning my-2"  href="{{route('post.show',$post)}}">Ver</a>
                        <form action="{{route('post.destroy',$post)}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger my-2" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}

@endsection