@extends('layouts.app')

@section('content')
    <h1>{{ $post->title}}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small> 
    <hr>
    <div class="btn-group mt-5">
        <a href="/posts" class="btn btn-secondary mr-2">Go Back</a>
        <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary mr-2">Edit</a>  
        <form action="{{ route('posts.destroy', $post->id)}}" method="post" class="pull-right">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form> 
    </div>
   
    
@endsection