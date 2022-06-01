<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Discografia | Tião Carreiro e Pardinho')</title>

        <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{asset('css/styles.css')}}>
        <link rel="icon" href={{asset('images/favicon.png')}}>

        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/jquery.mask.min.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>

    <body>

        <header>
            <div class="header">
                <div>
                    <a href="/">
                        <img src="{{asset('images/logo.png')}}" alt="Logotipo">
                    </a>
                </div>
    
                <div>
                    <h1>Discografia</h1>
                </div>

                @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-secondary">
                        <a href="/logout"
                        onclick="event.preventDefault();this.closest('form').submit();">
                        Sair do Sistema
                        </a>
                    </button>
                </form>
                @endauth
                
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


