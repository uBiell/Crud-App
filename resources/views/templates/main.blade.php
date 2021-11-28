<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Styles --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        {{-- Script --}}
        <script src="https://kit.fontawesome.com/cfaedefc96.js" crossorigin="anonymous"></script>
        {{-- Title --}}
        <title>@yield('title')</title>

    </head>
    <body class="antialiased">
        <header class="container">
            <div class="content">
                <div class="header">
                    <div class="title">
                        <h1>Crud Project</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/create-register">Criar novo Registro</a></li>
                </ul>
            </div>
        </div>

        @yield('index')
        @yield('create-register')

        </div>
    </body>
</html>