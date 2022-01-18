<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
      {{-- {{ dd($book) }} --}}
        <div class="container">
        <h1>Edit Data</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/update/{{ $book->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="book_name">Book Name :</label>
                <input type="text" id="book_name" name="book_name" class="form-control" value="{{ $book->book_name }}">
            </div>
            <div class="mb-3">
                <label for="author">Author :</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}">
            </div>
            <div class="mb-3">
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ $book->description }}">
            </div>
            <div class="mb-3">
                <label for="price">Price :</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $book->price }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-warning">
                    Edit!!
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>