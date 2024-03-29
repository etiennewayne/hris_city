<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div>
        @yield('extracss')
    </div>


</head>

<body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            <a class="navbar-item" href="/">
                <h1 class="ml-5" style="font-weight: bolder; font-size: 1.7em;">LeaMS</h1>
               
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            {{-- <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            About
                        </a>
                        <a class="navbar-item">
                            Jobs
                        </a>
                        <a class="navbar-item">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div> --}}

            <div class="navbar-end">
                <div class="navbar-item">
                    @auth()
                        <div class="buttons">
                            <button class="button is-danger has-text-weight-bold" 
                                icon-right="logout"
                                onclick="formLogout()">
                                <span class="mdi mdi-logout"></span>
                                Log out
                            </button>
                        </div>

                        <form action="/logout" method="post" id="logout">
                            @csrf
                        </form>
                    @else
                        <div class="buttons">
                            <a class="button is-primary" href="/sign-up">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="/login">
                                Log in
                            </a>
                        </div>
                    @endauth
                    
                </div>
            </div>
        </div>
        <div class="logo-container">
            <img src="/img/logo.png" class="logo" alt="Tangub City Logo" srcset="">
        </div>

    </nav>

   


    <div id="app">
        <div>
            @yield('content')
        </div>


    </div>

    <script>

       

        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });


        function formLogout(){
            document.getElementById('logout').submit();
        }


    </script>
</body>

</html>
