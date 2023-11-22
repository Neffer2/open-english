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
    <nav class="toolbar">
        <a href="{{ route('/') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="logo open english" width="180">
        </a>
        @auth
            <div class="nav-menu">
                <div class="item-menu">
                    <img src="{{ asset('assets/nav/volver.png') }}" alt="Icono de volver">
                    <img src="https://bullcrm.com.co/storage/photos/bfduG6XlxUhrlPWI8CHpifml9XNXpkNVK17KpBrj.jpg" alt="Icono de cerrar sesión" style="border-radius: 10rem;">
                    <div style="padding-right: .8rem; border: 4px solid #0078ff; border-bottom: none; border-left: none; border-top: none;">
                        Camila C. <br>
                        <span class="text-blue">Bienvenida</span>
                    </div>
                    <img src="{{ asset('assets/nav/cerrar.png') }}" alt="Icono de cerrar sesión" onclick="location.href = '{{ route('logout') }}';">
                </div>
            </div>            
        @endauth
    </nav>
    <main class="main">
        @yield('content')                  
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>