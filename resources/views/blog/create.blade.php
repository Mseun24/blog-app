<html>
<head>
<title>CREATE POST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron">
        <h2 style="text-align: center; font-family:serif; font-size:57px;">
            Create Post
 </h2>
</div>

@if ($errors->any())
    <div class="container">
        <ul>
        @foreach ($errors->all() as $error )
            <li>
                {{ $errors }}
            </li>
            
        @endforeach

        </ul>
    
@endif

<div class="container">
  <form action="/blog" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea name="description" class="form-control" placeholder="Description"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Select a file:</label>
      <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit Post</button>
  </form>
</div>
</body>
</html>