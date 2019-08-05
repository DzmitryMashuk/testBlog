@extends('layouts.layout')

@section('content')

    <div class="my-3">
        <a href="/post/create" class="btn btn-success rounded">Create</a>
    </div>

    @foreach($posts as $post)
        <div class="form-group">
            title: {{$post->title}}<br>
            message: {{$post->message}}<br>
            <div class="mb-2">
                <a href="/post/{{$post->slug}}" class="btn btn-info">Read more</a>
                <a href="/post/{{$post->slug}}/edit" class="btn btn-success">Edit</a>
            </div>
            <form action="/post/{{$post->slug}}" method="post">
                {{csrf_field()}}
                {!! method_field('delete') !!}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach

@endsection
