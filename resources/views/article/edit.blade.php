@extends('layouts.app')

@section('title')
    Bikin Artikel Baru
@endsection
@section('content')
    <h1>Edit Artikel</h1><hr>

    <form action="/article/{{ $article->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input field="title" label="Judul" type="text" value="{{$article->title}}"/>
        <x-textarea field="subject" label="Deskripsi" value="{{$article->subject}}"/>

        @if ($article->thumbnail)
            <img src="/images/{{ $article->thumbnail }}">
        @else
            <p>Kamu belum punya thumbnail</p>
        @endif
        <x-inputfile />
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
