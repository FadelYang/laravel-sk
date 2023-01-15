@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection
@section('content')
    {{-- mengoper data dari controller ke view --}}
    <img src="/images/{{$article->thumbnail}}" class="w-75">
    <h1>{{ $article->title }}</h1>
    <p>
        {{ $article->subject }}
    </p>

    <div class="btn-group mb-1">
        <a href="/article/{{ $article->id }}/edit" class="btn btn-info btn-sm me-1">Edit</a>
        <form action="/article/{{ $article->id }}" method="post" class="">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    <br>
    <a href="/article" class="btn btn-info btn-sm"><<</a>
@endsection
