<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <h1 class="my-4">List of Books</h1>

    @if(count($books) > 0)
        <ul class="list-group">
            @foreach($books as $book)
                <li class="list-group-item">{{ $book['title'] }} by {{ $book['price'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No books available.</p>
    @endif
</div>

</body>
</html>
