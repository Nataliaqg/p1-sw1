<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoFiesta</title>
</head>

<body>
    <h1>Esta es la vista Saas</h1>
        @if (Route::has('login'))
            <a href="{{ route('login') }}">login</a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}">register</a>
        @endif
</body>

</html>
