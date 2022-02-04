<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    @include('partials.nav')
    <h1>login</h1>

    <form method="POST">

        @csrf
        <label for="">
            <input type="text" name="name" id="" placeholder="email...">
        </label><br>

        <label for="">
            <input type="password" name="password" id="" placeholder="contraseña" autocomplete="on">
        </label><br>
        <button type="submit">
            Send
        </button>


    </form>

</body>

</html>