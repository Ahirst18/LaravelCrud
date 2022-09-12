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
<a href="{{ url('/') }}" class="btn btn-primary my-3">Show Data</a>

  <form action="{{ url('/store-data') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Enter name" name="name">
      @error('name')
      <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      @error('email')
      <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>