@extends('layouts.appArticles')

@section('title')
    Bikin Artikel Baru
@endsection
@section('content')
    <h1>Bikin Artikel Baru</h1><hr>

    <form action="/article" method="post" enctype="multipart/form-data">
        @csrf

        <x-input field="title" label="Judul" type="text"/>
        <x-textarea field="subject" label="Deskripsi" />
        <x-inputfile />


        <button type="submit" class="btn btn-dark mt-5">Submit</button>
    </form>
@endsection
