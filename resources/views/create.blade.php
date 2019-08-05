@extends('layouts.layout')

@section('content')
    <div class="my-3">
        <a href="/" class="btn btn-dark">Go Back</a>
    </div>

    <form action="/post" method="post">
        {{csrf_field()}}
        <input type="hidden" value="Dima" name="author"/>

        <div class="form-group">
            title:<br>
            <input type="text" name="title"/>
        </div>

        <div class="form-group">
            message:<br>
            <textarea name="message"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>

    @include('layouts.error')

@endsection
