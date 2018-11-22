<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update') }}" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="hidden" name="id" value="{{ $user['id'] }}">
        <input type="text" name="name" value="{{ $user['name'] }}">
        <br>
        <label for=""> Password</label>
        <input type="text" name="password" value="{{ $user['password'] }}">
        <br>
        <button>SAVE</button>
    </form>
</body>
</html>