@extends('layouts.layout')

@section('content')
    <div class="my-3">
        <a href="/" class="btn btn-dark">Go Back</a>
    </div>

    <form action="/post/{{$post->slug}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch') !!}
        <input type="hidden" value="{{$post->author}}" name="author"/>

        <div class="form-group">
            title:<br>
            <input type="text" name="title" value="{{$post->title}}"/>
        </div>

        <div class="form-group">
            message:<br>
            <textarea name="message">{{$post->message}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>

    @include('layouts.error')

@endsection
