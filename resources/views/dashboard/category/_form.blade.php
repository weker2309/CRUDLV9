@csrf
<label>Titulo</label>
<input type="text" name="title"  value="{{ old("title",$category->title) }}">
<br />
<label>Slug</label>
<input type="text" name="slug" value="{{ old("slug",$category->slug) }}">
<br />
<button type="submit">Régistrar</button>