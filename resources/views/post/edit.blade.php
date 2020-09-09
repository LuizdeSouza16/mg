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

    <div class="row justify-content-center">
        <form action=" {{ route('post.update', $post->id) }} " method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Insira o titulo da matéria" required>

                <label for="resume">Resumo</label>
                <input type="text" class="form-control" id="resume" name="resume" value="{{ $post->resume }}" placeholder="Insira o resumo da matéria" required>

                <label for="post">Matéria</label>
                <textarea class="form-control" name="post" id="post" cols="60" rows="10">{{ $post->post }}</textarea>

                <label for="id_tag">Tag</label>
               <select class="form-control" name="id_tag" id="id_tag">
                    <option >Selecione a Tag</option>
                    @foreach ($tags as $tag)
                        <option @if ($tag->id == $post->id_tag) selected @endif value="{{$tag->id}}">{{$tag->tag}}</option>
                    @endforeach
               </select>

                <button type="submit" class="btn btn-primary mt-1">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection
