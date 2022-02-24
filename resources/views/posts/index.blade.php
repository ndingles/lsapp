@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @forelse ($posts as $post)
            <div class="mb-5">
              <h5><a href="{{ route('posts.show', $post->id)}}">{{ $post->title}}</a></h5> 
              <small>Written on {{ $post->created_at }}</small>
            </div>
        @empty
        
        <p>No posts found</p>
        @endforelse
            {{ $posts->links()}}
@endsection