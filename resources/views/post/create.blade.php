@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action=" {{ route('tag.store') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="tag">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insira o titulo da matéria" required>

                <label for="tag">Resumo</label>
                <input type="text" class="form-control" id="resume" name="resume" placeholder="Insira o resumo da matéria" required>
                <label for="tag">Matéria</label>
                <textarea class="form-control" name="post" id="post" cols="30" rows="10"></textarea>

                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Insira a sua Tag" required>

                <button type="submit" class="btn-sm btn-primary mt-1">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection

