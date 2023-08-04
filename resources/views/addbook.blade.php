<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <h1 class="my-4">Add a New Book</h1>

    <form method="" action="">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>

</body>
</html>
