<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div  class="container mt-5">
    <a href="{{ route('Crud.create')}}" class="btn btn-primary btn-sm">Add Student</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Age</th>
          <th scope="col">Telephone</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <th scope="row">{{ $student->id }}</th>
          <td>{{ $student->name }}</td>
          <td>{{$student->address}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->telephone}}</td>
          <td>
            <a href="{{ route('Crud.edit',$student->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{ route('Crud.delete',$student->id)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>