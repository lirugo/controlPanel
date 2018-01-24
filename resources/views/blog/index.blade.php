@extends('layouts.app')

@section('title', ' | Blog')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Blog</h1>
            </div>
        </div> <!--End of row-->

        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{ $post->title }}</h2>
                <h5>Publish date: {{ date('j.m.y G:i', strtotime($post->created_at)) }}</h5>
                <p>{{ substr($post->body, 0, 255) }} {{ strlen($post->body) > 250 ? "..." : "" }}</p>
                <a href="{{ route('blog.single', $post->id) }}" class="btn btn-primary">Read More</a>
                <hr>
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@endsection