<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Discografia')</title>


        <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>

        <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{asset('css/styles.css')}}>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>

    <body>

        <header>
            <div class="d-flex justify-content-between">
                <div>
                    <img src="{{asset('images/logo.png')}}" alt="Logotipo">
                </div>

    
                <div>
                    <h1>Discografia</h1>
                </div>
            </div>
        </header>

        <div class="container">

            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif

            <section>
                @yield('content')
            </section>    
        </div>

        
    </body>
</html>


