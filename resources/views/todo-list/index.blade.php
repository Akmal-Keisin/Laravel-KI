<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- self css --}}
    <link rel="stylesheet" href="todo-list/style.css">
    <title>To Do List</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="card p-3 mt-5 shadow">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  {{ $message }}
                </div>
            @endif
            <h1 class="text-center mb-3">To Do List</h1>
            <div class="card-body">
                <div class="input-group">
                  <input type="text" id="input" class="form-control" placeholder="New List" >
                  <button class="btn btn-outline-primary" id="add" type="button">New <b>+</b></button>
                </div>
                @if (count($errors) > 0)
                <div class="alert alert-danger pb-1">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach                      
                  </ul>
                </div>
                @endif
              <div class="list-group list-box mt-3">
                @foreach ($data as $item)
                  <li style="" class="d-flex justify-content-between align-items-center list-group-item p-0 mb-2">
                    <span data-id="{{ $item->id }}" class="list-item ps-2">
                      <b class="number"></b>. {{ $item->list }}
                    </span>
                    <div class="d-flex action-button">
                      <a href="#" class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></a>
                      <a href="#" class="btn btn-danger delete"><i class="bi bi-trash"></i></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <input id="editInput" class="form-control" type="text" placeholder="Edit Here">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="saveChanges" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="todo-list/script.js"></script>    

  </body>
</html>