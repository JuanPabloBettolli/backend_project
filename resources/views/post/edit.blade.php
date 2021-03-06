@extends('base')
@section('title') POST EDIT @endsection
@section('content')

<form action="{{route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field("PATCH")}}

    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="image" name="image" value="{{$post->image}}">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea name="summary" id="summary" class= "form-control" cols=30 rows=5>{{$post->summary}}</textarea>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" id="description" class= "form-control" cols=30 rows=10>{{$post->description}}</textarea>
    </div>
   <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <input type="text" class="form-control" id="author" name="author" value="{{$post->author}}">
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>

</form>
@endsection