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
        <form action=" {{ route('post.update', $post->id) }} " method="post" enctype="multipart/form-data">

            @method('PUT')
            @include('post._partials.form')
        </form>
    </div>
</div>

@endsection
