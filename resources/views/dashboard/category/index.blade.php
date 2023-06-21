@extends('dashboard.layout')

@section('content')
    <div class="mt-4">
        <a class="btn btn-primary my-3" href="{{route('category.create')}}">Crear</a>
    </div>
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
                        <a class="my-2 btn btn-success" href="{{route('category.edit',$category)}}">Editar</a>
                        <a class="my-2 btn  btn-warning" href="{{route('category.show',$category)}}">Ver</a>
                        <form action="{{route('category.destroy', $category)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="mt-2  btn btn-danger" type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
@endsection