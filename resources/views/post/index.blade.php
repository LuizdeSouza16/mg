@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Index dos Posts</h1>
    <p class="mb-2">
        <a href="{{ route('post.create') }}" class="btn btn-success">Adicionar</a>
    </p>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row justify-content-center">
        <table class="table-sm table-fluid">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post</th>
                    <th scope="col">Tag</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    <th scope="row">{{ $post->id }}</th>
                    <td> <b> {{ $post->title }}</b></td>
                    <td> {{ $post->tag->tag }}</td>
                    <td><a href="{{ route('post.edit', $post->id) }}"  class="btn btn-primary">EDITAR</a> </td>
                    <td>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">EXCLUIR</button>
                    </td>
                </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

