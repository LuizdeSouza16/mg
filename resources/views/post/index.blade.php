@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Index da tag</h1>
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
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <form action="{{ route('post.destroy', $tag->id) }}" method="POST">
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->tag }}</td>
                    <td><a href="{{ route('post.edit', $tag->id) }}"  class="btn btn-primary">EDITAR</a> </td>
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

