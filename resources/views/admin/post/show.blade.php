@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>{{$post->id}} : {{$post->title}}</h2>
        <h3>{{$post->author}}</h3>
        <h4>{{$post->date}}</h4>
        <p>
            {{$post->content}}
        </p>
    </div>
</div>
@endsection
