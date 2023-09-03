<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Websted, o seu site do seu jeitinho!" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet" />


    <link rel="shortcut icon" href="/img/icon.png" type="icon.png" />

    @vite(['resources/js/font-awesome.js', 'resources/css/login/style.css'])

    <title>NutriON | Login</title>
</head>

<body>
    <main>
        @foreach ($errors->all() as $message)
            {{ $message }}
        @endforeach
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="email">
            <input type="password" name="password">

            <button type="submit">Login</button>
        </form>
    </main>
</body>

</html>
