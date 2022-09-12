<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<a href="{{ url('/add-data') }}"  type="button" class="btn btn-primary my-3">Add Data</a>
@if(Session::has('msg'))
<p class = "alert alert-success">{{ Session::get ('msg')}}</p>
@endif
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($showData as $key=>$data)
      <tr>
        <td>{{ $key+1}}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>
          <a href="{{ url ('/edit-data/'.$data->id)}}" class = "btn btn-success">Edit</a>
          <a href="{{ url ('/delete-data/'.$data->id)}}" onclick = "return confirm('are you sure to delete')" class = "btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>