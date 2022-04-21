<html>
<head>
<title>BLOG POST</title>
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
         MY BLOG POST
 </h2>
</div>

@if (session()->has('message'))
    <p class="alert alert">
        {{ session()->get('message') }}
    </p>
@endif

    <div class="container">
        <a href="/blog/create" class="btn btn-primary">
            Create a post
        </a>
    </div><hr/><hr/>

@foreach ($posts as $post )
    <div class="container">
        <h3>  <img src="{{ asset('images/' . $post->image_path) }}" alt="" height="100" width="150">
            {{ $post->title }}
    </h3>
    <span>
        by
        <span style="font-style: italic;">
            {{ $post->user->name }}
    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p>
         {{ $post->description }}
    <a href="/blog/{{ $post->slug }}"
        class="btn btn-primary"><hr><hr>
        Keep Reading
</a>
@if (isset (Auth::user()->id) && Auth::user()->id == $post->user_id)
<span>
    <a href="/blog/{{ $post->slug }}/edit" class="alert alert-info">
        Edit
        </a>
    </span>
    <p>
    <span>
<form action="/blog/{{$post->slug}}" method="POST">
        @csrf
        @method('delete')
    <button class="btn btn-info" type="submit"> Delete</button>
</form>
</span>
</div>
@endif

@endforeach
</body>
</html>    
    