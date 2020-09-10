@extends('layouts.app')

@section('content')
<div class="col align-items-center" >

    <h1 class="text-center">Administração dos tag</h1>
    <p class="mb-2">
        <a href="{{ route('tag.create') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"> Adicionar</i>
        </a>
    </p>

   @include('_includes.messages')

    <table class="table table-sm table-fluid table-borderless">
        <thead>
            <tr>
                <th class="text-center" scope="col">TAG</th>
                <th class="">Ações</th>
                <th class="text-right"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td class="text-center" >{{ $tag->tag }}</td>
                <td><a href="{{ route('tag.edit', $tag->id) }}"  class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a> </td>
                <td>
                    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $tags->links() !!}
</div>

@endsection

