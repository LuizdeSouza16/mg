@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('_includes.errors')

        <form action=" {{ route('post.store') }} " method="post" enctype="multipart/form-data">
            @include('post._partials.form')
        </form>
    </div>
</div>

@endsection

