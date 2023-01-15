<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}" media="all" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title', 'Article Fadel')</title>
</head>
<body class="container mt-5 bodyMain">
    <nav>
        <a href="/article">Article</a>
        {{-- <a href="/article/create">New+</a> --}}
    </nav>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('/Js/main.js') }}"></script>
</body>
</html>