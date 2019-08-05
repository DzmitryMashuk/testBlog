@extends('layouts.layout')

@section('content')

    <div class="my-3">
        <a href="/" class="btn btn-dark">Go Back</a>
    </div>

    title: {{$post->title}}<br>
    message: {{$post->message}}<br>

@endsection
