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
           @include('tag._partials.form')
        </form>
    </div>

</div>

@endsection

