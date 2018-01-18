@extends('layouts.app')

@section('title', ' | All Posts')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">All posts</div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <h1>All Posts</h1>
                        </div>

                        <div class="col-md-2">
                            <a href="{{ route('posts.create') }}" class="btn  btn-primary btn-block btn-h1-spacing"> Create new post</a>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <table class="table">
                                <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{ $post->id }}</th>
                                        <td>{{ substr($post->title, 0, 30 ) }}{{strlen($post->title) > 30 ? "..." : "" }}</td>
                                        <td>{{ substr($post->body, 0, 50 ) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
                                        <td>{{ date('j.m.y G:i', strtotime($post->updated_at)) }}</td>
                                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--End of row-->

    </div>

@endsection