
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>

    <h1>Add New Book</h1>

        <a href="/books">Back to Books</a>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="/books" method="POST">
             @csrf


        <p>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"
                   value="{{ old('title') }}" required>
        </p>

        <p>
            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author"
                   value="{{ old('author') }}" required>
        </p>

        <p>
            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category"
                   value="{{ old('category') }}" required>
        </p>

        <p>
            <label for="published_year">Published Year:</label><br>
            <input type="number" id="published_year"
                   name="published_year"
                   value="{{ old('published_year') }}" required>
        </p>

        <p>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"
                      rows="5">{{ old('description') }}</textarea>
        </p>

        <button type="submit">Save Book</button>
    </form>

</body>
</html>