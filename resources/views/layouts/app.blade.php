<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title')</title>
</head>


<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/gokken">Gokken</a></li>
                <li><a href="/tussenstand">Tussenstand Checken</a></li>
                <li><a href="/admin">Admin Login</a></li>
                <li><a href="/user">User Login</a></li>
                <li><a href="/register">User Registreren</a></li>
            <ul>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>

</body>
</html>
