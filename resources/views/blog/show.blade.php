<html>
<head>
<title>VIEW POST</title>
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
        {{ $post->title }}
 </h2>
</div>
<span>
    by
    <span style="font-style: italic;">
            {{ $post->user->name }}
    </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
<p class="container">
    {{$post->description}}
    </p>
    <a href="/blog" class="alert alert-info">Back</a>
</body>
</html>