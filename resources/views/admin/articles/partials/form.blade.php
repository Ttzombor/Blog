<label for="">Status</label>
<select class="form-control" name="published">
    @if(isset($article->id))
        <option value="0" @if ($article->published == 0) selected ="" @endif>Not published
        </option>
        <option value="1" @if ($article->published == 1) selected ="" @endif>Published
        </option>

    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title article"
       value="{{$article->title ?? ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Autogeneration"
       value="{{$article->slug ?? ""}}" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="categories[]", multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea type="text" class="form-control" name = "description_short"
          value="{{$article->description_short ?? ""}}"></textarea>

<label for="">Description</label>
<textarea type="text" class="form-control" name = "description"
          value="{{$article->description ?? ""}}"></textarea>

<hr />

<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title"
       value="{{$article->meta_title ?? ""}}" >

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description"
       value="{{$article->meta_description ?? ""}}">

<label for="">Key words</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Key words with , "
       value="{{$article->meta_keywords ?? ""}}">

<hr />


<input class="btn btn-primary" type="submit" value="Save">
