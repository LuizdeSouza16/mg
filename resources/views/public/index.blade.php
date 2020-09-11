@extends('public.app')

@section('content')
    <div class="col-xs-12 m-3">
        <h1 class="text-danger">Últimos Conteúdos</h1>

        @foreach ($posts as $post)
        <hr>
        <article class="post-h">
            <div class="row">
                <div class="col-lg-4 post-h__image">
                    <a
                        href="{{ route('noticia', $post->id) }} ">
                        <img src="{{ url("storage/{$post->post_img}") }} "
                            alt="{{ $post->title }}"
                            title="{{ $post->title }}"
                            style="width: auto; height: 114px" >
                    </a>
                </div>
                <div class="col-lg-8">
                    <a
                        href="{{ route('noticia', $post->id) }} ">
                        <h2 class="text-danger">{{ $post->title }}</h2>
                        <p class="text-muted"> {{ $post->resume }} </p>
                        <div class="text-dark">
                            <span><i class="fa fa-clock-o mr-1"></i> {{ $post->created_at->format('d/m/y H:i') }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </article>
        @endforeach

        {!! $posts->links() !!}

    </div>

@endsection
