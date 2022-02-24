@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1> 
    <form action="{{ route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" id="editor" class="form-control" placeholder="body" aria-describedby="helpId" rows="8">{{ $post->body }}</textarea>
        </div>
        
        <button class="btn btn-primary">Submit</button>
    </form>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    var editor = CKEDITOR.replace( 'editor');
</script>
@endsection