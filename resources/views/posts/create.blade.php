@extends('layouts.app')

@section('title', '| Create post')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new post</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'posts.store']) !!}
                            {{ Form::label('title','Title') }}
                            {{ Form::text('title',null, ['class' => 'form-control']) }}

                            {{ Form::label('body','Post body:') }}
                            {{ Form::textarea('body',null, ['class' => 'form-control']) }}

                             {!! Html::linkRoute('posts.index', 'Cancel',[] ,['class' => 'btn btn-danger top-space']) !!}
                            {{ Form::submit('Create', ['class' => 'btn btn-success top-space']) }}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection