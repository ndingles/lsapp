@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="well">
              {{ $post->title}}
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection