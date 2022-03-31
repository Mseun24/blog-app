<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
</head>
<body>

    <form action="" method="POST">
    @csrf
    <input type="text" 
    name="title" 
    placeholder="Title....." class=""><br>

    <textarea name="description" id="description" cols="30" rows="10"
    class="">
</textarea>

    <button type="submit" 
    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg
    font-extrabold py-4 px-8 rounded-3xl"> 
    Submit
</button>

    </form>



</body>
</html>