@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action=" {{ route('post.store') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insira o titulo da matéria" required>

                <label for="resume">Resumo</label>
                <input type="text" class="form-control" id="resume" name="resume" placeholder="Insira o resumo da matéria" required>

                <label for="post">Matéria</label>
                <textarea class="form-control" name="post" id="post" cols="60" rows="10"></textarea>

                <label for="id_tag">Tag</label>
               <select class="form-control" name="id_tag" id="id_tag">
                    <option value="">Selecione a Tag</option>
                    @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->tag}}</option>
                    @endforeach
               </select>

                <button type="submit" class="btn btn-primary mt-1">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection

