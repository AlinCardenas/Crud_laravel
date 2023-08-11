<x-alert class="mb-4" type='error' message="hila" />
<x-ale
<div {{ $attributes->merge(['class'=>''])}} >
    <h1>{{ $post->title }} </h1>
    <p>{{ $post->created_at}} </p>
    <p>{{ $post->content}} </p>
</div>