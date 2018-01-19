@extends('layouts.app')

@section('title', '| Welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{substr($post->body, 0, 300)}} {{strlen($post->body) > 300 ? "..." : ""}}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
@endsection

