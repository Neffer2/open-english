<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @livewireStyles
    <title>Open english</title>
</head>
<body>
    <nav class="d-flex justifi-content-start px-5 py-4 bg-white">
        <img src="{{ asset('assets/logo.png') }}" alt="logo open english" width="180">
    </nav>
    <main class="main">
        <div class="row">
            <div class="col-md-8 d-flex justify-content-end login-hero">
                <img src="{{ asset('assets/auth/open-girl.jpg') }}" alt="Chica con chats volando" style="width: 80%; height: auto;">
            </div>
            <div class="col-md-4 login-container">
                <img class="flecha" src="{{ asset('assets/auth/flecha.png') }}" alt="flecha">
                @yield('content')                  
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>