@csrf
<label for="title">Titulo</label>
<input  class="form-control" name="title" value="{{old('title',$post->title)}}">

<label for="slug">Slug</label>
<input  class="form-control" name="slug" value={{old('slug',$post->slug)}} >

<label for="">Categoria</label>
<select class="form-control" name="category_id" >
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<label for="">Postd</label>
<select class="form-control" name="posted" id="">
    <option {{ old("posted","$post->posted") == 'yes'? 'selected' :''}} value="yes">Yes</option>
    <option {{ old("posted","$post->posted") == 'no' ? 'selected' :''}} value="not">No</option>

</select>

<label for="contenido">Contenido</label>
<textarea class="form-control" name="content" >{{old('content',$post->content)}}</textarea>

<label for="description">description</label>
<textarea class="form-control" name="description" >{{old('description',$post->description)}}</textarea>

<label for="image">Imagen</label>
<input type="file" name="image" >

<button class="btn btn-success"  type="submit">Enviar</button>
    
