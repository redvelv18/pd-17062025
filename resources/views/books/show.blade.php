<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
<x-layout>
    <form action="{{ route('book.destroy') }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Dzēst">
    </form>

    <h2>{{ $singleBook->title }}</h2>
    <h3>{{ $singleBook->author }}</h3>
    <p>{{ $singleBook->released_at }}</p>
</x-layout>
</body>
</html>