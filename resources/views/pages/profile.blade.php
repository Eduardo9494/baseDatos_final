<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>gatitas</h1>
    <h3 class="profile-username text-center">{{ Auth::user()->name }} - {{ Auth::user()->username }}</h3>
    <a href="{{ route('logout') }}">salir</a>
</body>
</html>