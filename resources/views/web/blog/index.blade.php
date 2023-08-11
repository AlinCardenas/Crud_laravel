@extends('web.layout')
@section('content')
    <x-web.blog.post.index :posts='$posts'>
        @slot('header')
         <h1>Listado slot con nombre</h1>
        @endslot
        @slot('footer')
        <footer>
            Lpie de pagina
        </footer>
        @endslot
    </x-web.blog.post.index>
@endsection