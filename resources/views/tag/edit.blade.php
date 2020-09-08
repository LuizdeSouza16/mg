@extends('layouts.app')

@section('content')
<div class="container">
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
        <form action=" {{ route('tag.update', $tag->id) }} " method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Insira a sua Tag" value="{{$tag->tag }}" required>

                <button type="submit" class="btn-sm btn-primary mt-1">Enviar</button>
            </div>
        </form>
    </div>

</div>

@endsection

