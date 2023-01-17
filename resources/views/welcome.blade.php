@extends('layouts.appArticles')
@section('content')
    <div class="row">
        <section class="mt-5 mx-auto">
            <p class="h1 text-center">ARTIKELIN</p>
            <p class="text-center blockquote">tempat kamu baca artikel menarik seputar game, film, musik, dan lainnya</p>
            <section class="text-center">
                <a href="{{ url('/article') }}" class="btn btn-dark">Baca Artikel</a>
                <a href="{{ route('login') }}" class="btn btn-light">Login Sebagai Penulis</a>
            </section>
        </section>
    </div>
@endsection