<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo | Create</title>
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
<body style="text-align: center">
    <h5 style="color: royalblue;">Fill Your Todo Here</h5>
    
    <h4> 
        <x-alert  />
    </h4>
    <body class="">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="container mt-3">
                    @if (Auth::user())
                <form action="/upload" method="post" class="">
                    @csrf
                    <label for="date">Title:</label>
                    <input type="text" id="title" name="title" class="form-control form-control-lg"/>
                    <input style="display:none" type="number" name="id"/><br/>
                    <label for="date">Date:</label>
                    <input type="datetime-local" name="completed" id="completed" class="form-control form-control-lg">
                    <br/><br/>
                    <input type="submit" class="btn btn-success lg" value="Submit" /> &rarr; <a href="/index" class="btn btn-info">View</a>
                    </form>
                    <div class="">
                    @else
                    <p>
                    Please Register and Login !
                    </p>
                    </div>
                    @endif
       
</div>
</body>
</html>