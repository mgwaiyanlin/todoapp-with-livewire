<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/a201f6459b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        @livewireStyles
    </head>
    <body class="">

        {{-- navbar start --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


            <div class="container-fluid">
                <a href="#" class="text-white navbar-brand fs-4 fw-bold">Navbar</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a href="" class="nav-link text-white">TodoList</a>
                        </li>
                        <li class="navbar-item">
                            <a href="" class="nav-link text-white">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- navbar end --}}

        <div class="container mx-auto mt-5">
            <livewire:todo-list />
        </div>

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
