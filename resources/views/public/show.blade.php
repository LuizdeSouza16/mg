@extends('public.layout')


@section('content')

    <div class="container">
        <div class="row">
            <h1 class="text-center mb-2"> {{ $post->title}} </h1>
            <div class="col-12">
              <div class="text-center">
                <img src="{{ url("storage/{$post->post_img}") }}" alt="{{ $post->title }}" >
              </div>
              <p><button class="mx-5 my-1 btn-xs btn-primary"> {{ $post->tag->tag }} </button></p>
              <h6 class="mx-5 my-1 text-muted"> {{ $post->resume }} </h6>

              <div class="col-12">
                <div class="text-center">
                    <p> {{$post->post}} </p>
                </div>
              </div>

            </div>
        </div>
    </div>

@endsection
