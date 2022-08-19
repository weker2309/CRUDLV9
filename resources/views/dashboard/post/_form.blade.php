@csrf
<label>Titulo</label>
<input type="text" name="title"  value="{{ old("title",$post->title) }}">
<br />
<label>Slug</label>
<input type="text" name="slug" value="{{ old("slug",$post->slug) }}">
<br />
<label>Contenido</label>
<textarea name="content">{{ old("content", $post->content) }}</textarea>
<br />
<label>Descripción</label>
<textarea name="description">{{ old("description",$post->description) }}</textarea>
<br />
<label>Categoria:</label>
<select name="category_id">
    
        @foreach ($categorie as $title => $id)
            <option value="{{$id}}" {{ old("category_id","$post->category_id") == $id ? "selected" : ""}}>{{ $title}}</option>
        @endforeach
    
</select>
<br />
<label>Posted</label>
<select name="posted">
    
    <option value="Not"  {{ old("posted","$post->posted") == "Not" ? "selected" : ""}}>Not</option>
    <option value="yes" {{ old("posted","$post->posted") == "yes" ? "selected" : ""}}>Yes</option>
</select>
<br />
{{-- En esta parte habilitamos el input de imagen si esta definido o no task con isset--}}
@if (isset($task) && $task== "edit")
    <label>Image</label>
    <input type="file" name="image"> 
@endif
<br />
<button type="submit">Régistrarme</button>