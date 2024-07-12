<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit User</h2>
<form action="/users/edit/{{ $user-> id }}" method="post">
    @csrf
    <label for="Name">
        Name:
        <input type="text" name="name" value="{{ $user-> name }}">
    </label><br>
    <label for="Email">
        Email:
        <input type="text" name="email" value="{{ $user-> email }}">
    </label><br>
    <label for="Password">
        Password:
        <input type="text" name="password" >
    </label><br>
    <button type="submit">Edit user</button>
</form>

</body>
</html>
