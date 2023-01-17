@extends('layouts.appArticles')

@section('title', 'Artikel Fadela Numah Kadenza')
@section('content')
    <h1>Ini Halaman Artikel</h1>
    {{-- <a href="/article/create" class="btn btn-primary mb-2">Bikin Artikel+</a> --}}

    @foreach ($articles->chunk(3) as $articleChunk)
    <div class="row">
        @foreach ($articleChunk as $article)
        <div class="col card mb-2 ms-1 me-1 text-black">
            @if ($article->thumbnail)
                <img src="/images/{{$article->thumbnail}}" class="mt-3">
            @endif
            <div class="card-body h-100">
                <p><strong>{{ ucfirst($article->title) }}</strong></p>
                <p class="textArticle">{{ $article->subject }}</p>
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

    @include('layouts.footer')
@endsection