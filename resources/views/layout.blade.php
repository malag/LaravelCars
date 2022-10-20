<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Cars</title>
    </head>
    <body>
        <div class="container">
            <div>
                @auth
                    <h3>Welcome {{auth()->user()->name}}</h3>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                @endauth
            </div>
            @yield('content')
        </div>
    </body>
</html>