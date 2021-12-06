<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Styles --}}
        <link rel="stylesheet" href="/styles/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <div class="container-fluid">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 header">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <h1 class="fs-3">
                        Crud Project
                        </h1>
                    </a>
                    <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
    
                    <li class="nav-item">
                        <a href="/create-register" class="nav-link">Register</a>
                    </li>
                </ul>
                </header>
            </div>
        </div>

        @yield('index')
        @yield('create-register')
        @yield('edit')

        </div>
    </body>
</html>