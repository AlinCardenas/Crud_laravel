 @csrf
 <label for="title">Titulo</label>
<input type="text" name="title" value="{{old('title',$category->title)}}">
<label for="slug">Slug</label>
<input type="text" name="slug" value="{{old('slug',$category->slug)}}">
<button type="submit">Crear</button>
