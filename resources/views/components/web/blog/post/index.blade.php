<div>
    {{ $slot }}
    @foreach ($posts as $post)
        <div class="card caret-white mb-2">
            <h2>{{ $post->title }}</h2>
            <a href="{{  route('web.blog.show',$post)}}">Ir</a>
            <h2>{{ $post->description }}</h2>
        </div>
    @endforeach
    {{ $posts->links() }}
</div>