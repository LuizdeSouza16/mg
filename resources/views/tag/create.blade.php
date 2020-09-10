@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('_includes.errors')

        <form action=" {{ route('tag.store') }} " method="post">
            @include('tag._partials.form')
        </form>
    </div>
</div>

@endsection

