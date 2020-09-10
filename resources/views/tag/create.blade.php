@extends('layouts.app')

@section('content')
<div class="container">
    @include('_includes.errors')

    <div class="row justify-content-center">
        <form action=" {{ route('tag.store') }} " method="post">
            @include('tag._partials.form')
        </form>
    </div>
</div>

@endsection

