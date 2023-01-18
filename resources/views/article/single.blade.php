@extends('layouts.appArticles')

@section('title')
    {{ $article->title }}
@endsection
@section('content')
    {{-- mengoper data dari controller ke view --}}
    @if ($article->thumbnail)
        <img src="/images/{{$article->thumbnail}}" class="w-75">
    @endif
    <h1 class="mt-3">{{ $article->title }}</h1>
    <p class="text-mute">{{$article->created_at->format('D, d M Y')}}</p>
    <p class="mt-5">
        {!! \Michelf\Markdown::defaultTransform($article->subject)!!}
    </p>

    <div class="btn-group mb-1">
        @if (Auth::check())
        <a href="/article/{{ $article->id }}/edit" class="btn btn-info btn-sm me-1">Edit</a>
        <form action="/article/{{ $article->id }}" method="post" class="">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
        @endif
    </div>
    <br>
    <a href="/article" class="btn btn-info btn-sm">Kembali <<</a>
@endsection
{{-- @include('layouts.footer') --}}