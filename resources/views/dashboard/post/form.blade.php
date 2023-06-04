@csrf
<label for="title">Titulo</label>
<input type="text" name="title" value="{{old('title',$post->title)}}">

<label for="slug">Slug</label>
<input type="text" name="slug" value={{old('slug',$post->slug)}} >

<label for="">Categoria</label>
<select name="category_id" >
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<label for="">Postd</label>
<select name="posted" id="">
    <option {{ old("posted","$post->posted") == 'yes'? 'selected' :''}} value="yes">Yes</option>
    <option {{ old("posted","$post->posted") == 'no' ? 'selected' :''}} value="not">No</option>

</select>

<label for="contenido">Contenido</label>
<textarea name="content" >{{old('content',$post->content)}}</textarea>

<label for="description">description</label>
<textarea name="description" >{{old('description',$post->description)}}</textarea>

<button type="submit">Enviar</button>
    
