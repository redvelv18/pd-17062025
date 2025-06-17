<html>

    <head>

        <title>{{ $title ?? 'Navigation' }}</title>

    </head>

    <body>

        <h1>Navigation</h1>

        <hr/>
        <a href="{{ route('book.create') }}">Create a book</a> <br>
        <a href="{{ route('sort.bubble') }}">Bubble Sort</a><br>
         <a href="{{ route('book.index') }}">All books</a>
        {{ $slot }}

    </body>

</html>