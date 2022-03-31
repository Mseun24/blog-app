<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>User login</h1>
    <form action="user" method="POST">
        @csrf
    <input type="text" name="user" placeholder="User name"> <br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit"> Login</button>

    </form>
</body>
</html>