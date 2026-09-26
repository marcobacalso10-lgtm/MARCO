<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
</head>
<body>

    <h1>Book Management System</h1>

        <a href="/books/create">Add New Book</a>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <hr>

    @forelse($books as $book)

        <h2>{{ $book->title }}</h2>

        <p>Author: {{ $book->author }}</p>
        <p>Category: {{ $book->category }}</p>
        <p>Published: {{ $book->published_year }}</p>

                    <a href="/books/{{ $book->id }}">View</a>

            <a href="/books/{{ $book->id }}/edit">Edit</a>
            <form action="/books/{{ $book->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        <hr>

    @empty

        <p>No books available yet.</p>

    @endforelse

</body>
</html>