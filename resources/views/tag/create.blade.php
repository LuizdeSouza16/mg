@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action=" {{ route('tag.store') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Insira a sua Tag" required>

                <button type="submit" class="btn-sm btn-primary mt-1">Enviar</button>
            </div>
        </form>
    </div>
</div>

@endsection

