@extends('dashboard.layout')

@section('content')
    <h1>Lisado de categorias</h1>
    <a href="{{route('category.create')}}">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)    
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug }}</td>
                    <td>
                        <a href="{{route('category.show',$category)}}">ver</a>
                        <a href="{{route('category.edit',$category)}}">editar</a>
                        <form action="{{route('category.destroy', $category)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
@endsection