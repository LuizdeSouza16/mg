@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @include('_includes.errors')

    <div class="container-fluid">
        <div class="row justify-content-center">

            <h1>{{$post->title}}</h1>
            @if ($post->post_img)
                <img src="{{ url("storage/{$post->post_img}") }}" alt="{{$post->title}}">
            @endif
            <h4 class="text-muted">{{$post->resume}}</h4>
            <p style="white-space: pre-line;">{{$post->post}}</p>

        </div>
        <a href="{{ route('post.index') }}" class="btn btn-primary"> Voltar</a>
    </div>

@endsection
