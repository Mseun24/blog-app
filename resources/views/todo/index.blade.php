<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      body{
    margin-top:20px;
    background: #f8f8f8;
}

.todo-nav {
    margin-top: 10px
}

.todo-list {
    margin: 10px 0
}

.todo-list .todo-item {
    padding: 15px;
    margin: 5px 0;
    border-radius: 0;
    background: #f7f7f7
}

.todo-list.only-active .todo-item.complete {
    display: none
}

.todo-list.only-active .todo-item:not(.complete) {
    display: block
}

.todo-list.only-complete .todo-item:not(.complete) {
    display: none
}

.todo-list.only-complete .todo-item.complete {
    display: block
}

.todo-list .todo-item.complete span {
    text-decoration: line-through
}

.remove-todo-item {
    color: #ccc;
    visibility: hidden
}

.remove-todo-item:hover {
    color: #5f5f5f
}

.todo-item:hover .remove-todo-item {
    visibility: visible
}

div.checker {
    width: 18px;
    height: 18px
}

div.checker input,
div.checker span {
    width: 18px;
    height: 18px
}

div.checker span {
    display: -moz-inline-box;
    display: inline-block;
    zoom: 1;
    text-align: center;
    background-position: 0 -260px;
}

div.checker, div.checker input, div.checker span {
    width: 19px;
    height: 19px;
}

div.checker, div.radio, div.uploader {
    position: relative;
}

div.button, div.button *, div.checker, div.checker *, div.radio, div.radio *, div.selector, div.selector *, div.uploader, div.uploader * {
    margin: 0;
    padding: 0;
}

div.button, div.checker, div.radio, div.selector, div.uploader {
    display: -moz-inline-box;
    display: inline-block;
    zoom: 1;
    vertical-align: middle;
}

.card {
    padding: 25px;
    margin-bottom: 20px;
    border: initial;
    background: #fff;
    border-radius: calc(.15rem - 1px);
    box-shadow: 0 1px 15px rgba(0,0,0,0.04), 0 1px 6px rgba(0,0,0,0.04);
}</style>
</head>
<body>
    <h3 style="text-align: center;">
    <a href ="/create" class="btn btn-primary">Create Todo </a> &rarr;
    <a href ="/dashboard" class="btn btn-primary">Logout </a>
</h3>
<h4>
    <x-alert />
</h4>
    <div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-white">
                <div class="card-body">
                    <form action="javascript:void(0);">
                        <input type="text" class="form-control add-task" placeholder="New Task...">
                    </form>
        @foreach ($todos as $todo )
   
        @if($todo->completed)
    <li>
    <span style="text-decoration: line-through;">{{$todo->title}}</span>
        @else
            {{$todo->title}}
                @endif
                    <ul class="nav nav-pills todo-nav">
                        <li role="presentation" class="nav-item all-task active"><a href = "{{asset('/' . $todo->id . '/edit')}}">Edit Todo</a> </li>
                        <hr>
                        <li role="presentation" class="nav-item active-task"><a href = "{{asset('/' . $todo->id . '/completed')}}">Completed</a></li>
                        <hr/>
                        <li role="presentation" class="nav-item completed-task"><a href = "{{asset('/' . $todo->id . '/delete')}}">Delete</a></li>
                    </ul>
</li>
                    @endforeach
</body>
</html>