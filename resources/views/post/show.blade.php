@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>{{$post->title}}</h1>
            <h4 class="text-muted">{{$post->resume}}</h4>
            <p style="white-space: pre-line;">{{$post->post}}</p>

        </div>
        <a href="{{ route('post.index') }}" class="btn btn-primary"> Voltar</a>
    </div>

@endsection
