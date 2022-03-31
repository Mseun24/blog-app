<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Todo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body style="text-align: center">
    <h4>Edit your TODO</h4>
    <h4>
        <x-alert />
</h4>
<div class="container mt-3">
    <form action="/update" method="post" class="">
        @csrf
        @method('patch')
        <input type="text" id="title" name="title" class="form-control form-control-lg" value="{{$todo->title}}"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}"/><br/>
        <input type="submit" class="btn btn-success lg" value="Edit" /> &rarr; <a href="/index" class="btn btn-info">Back</a>
    </form>
</div>   
</body>
</html>