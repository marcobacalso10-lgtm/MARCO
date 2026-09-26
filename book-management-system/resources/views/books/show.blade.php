
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
</head>
<body>

    <h1>Book Details</h1>

    <a href="/books">Back to Books</a>


    <h2>{{ $book->title }}</h2>

    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Category:</strong> {{ $book->category }}</p>
    <p><strong>Published Year:</strong> {{ $book->published_year }}</p>

    <p><strong>Description:</strong></p>
    <p>{{ $book->description ?: 'No description available.' }}</p>

        <a href="/books/{{ $book->id }}/edit">Edit Book</a>

        <form action="/books/{{ $book->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">Delete Book</button>
    </form>

</body>
</html>