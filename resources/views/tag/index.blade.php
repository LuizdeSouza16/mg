@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Index da tag</h1>
    <p class="mb-2">
        <a href="{{ route('tag.create') }}" class="btn btn-success">Adicionar</a>
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
                    <th scope="col">TAG</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->tag }}</td>
                    <td><a href="{{ route('tag.edit', $tag->id) }}"  class="btn btn-primary">EDITAR</a> </td>
                    <td>
                        <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">EXCLUIR</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

