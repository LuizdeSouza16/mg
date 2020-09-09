@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Administração dos Posts</h1>
    <p class="mb-2">
        <a href="{{ route('post.create') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>
        </a>
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
                    <th scope="col" class="text-center">Post</th>
                    <th class="text-center">Tag</th>
                    <th class="text-right">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>


                    <td> <b> {{ $post->title }}</b></td>
                    <td> {{ $post->tag->tag }}</td>
                    <td ><a href="{{ route('post.show', $post->id) }}"  class="btn btn-secondary">MOSTRAR</a></td>
                    <td><a href="{{ route('post.edit', $post->id) }}"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a> </td>
                    <td>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

