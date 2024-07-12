<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Create New User</h1>
    <form action="/users/create" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label>
        <br>
        <label for="Email">
            Email:
            <input type="text" name="email">
        </label>
        <br>
        <label for="Password">
            Password:
            <input type="text" name="password">
        </label>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
