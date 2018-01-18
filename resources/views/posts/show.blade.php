@extends('layouts.app')

@section('title', ' | View Post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Show post</div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <h1> {{ $post->title }}</h1>
                            <p class="lead"> {{ $post->body }} </p>
                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <dt>Created At:</dt>
                                    <dd>{{ date('j.m.y G:i', strtotime($post->created_at)) }}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Updated At:</dt>
                                    <dd>{{ date('j.m.y G:i', strtotime($post->updated_at)) }}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-primary btn-block">Edit</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-danger btn-block">Delete</a></div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection