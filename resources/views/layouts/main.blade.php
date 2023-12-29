<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Mading JeWePe</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logojwpp.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css" />
  </head>

  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logojwpp.png') }}" alt="Logo" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link custom-color" href="/">Artikel</a>
                </li>
            </ul>
        </div>

        <div class="ml-auto">
            <a href="/login" class="btn btn-danger btn-custom">Login</a>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>@yield('container')</main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <p class="text-center">Copyright &copy; 2023 E-Mading JeWePe</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>