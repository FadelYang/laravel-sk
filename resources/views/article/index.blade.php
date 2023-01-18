@extends('layouts.appArticles')

@section('title')
    @if (Auth::check())
        |{{ ucfirst(Auth::user()->username) }}
    @endif
@endsection
@section('content')
    <h1><strong>Ini Halaman Artikel</strong></h1>
    @if (Auth::check())
        <a href="/article/create" class="btn btn-dark mb-2">Bikin Artikel+</a>
    @endif

    @foreach ($articles->chunk(3) as $articleChunk)
    <div class="row">
        @foreach ($articleChunk as $article)
        <div class="col card mb-2 ms-1 me-1 text-black shadow-sm">
            @if ($article->thumbnail)
                <img src="/images/{{$article->thumbnail}}" class="mt-3">
            @endif
            <div class="card-body h-100">
                <h2><strong>{{ ucfirst($article->title) }}</strong></h2>
                <p class="text-muted">{{$article->created_at->format('D, d M Y')}}</p>
                <div class="textArticle">
                    <p>{!! \Michelf\Markdown::defaultTransform($article->subject)!!}</p>
                </div>
            </div>
            <div class="card-body">
                <a href="/article/{{ $article->slug }}" class="btn btn-info btn-sm stretched-link">Baca</a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div>
        {{ $articles->links() }}
    </div>
@endsection