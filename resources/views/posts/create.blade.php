@extends('layouts.app')

@section('content')
    <h3>Post a Blog</h3>
    <div class="container" style="max-width: 800px;">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Your Content'])}}
            </div>
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection