<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
   <!--     <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">Navbar</a>
              <form class="d-flex">
                  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                      @if (Route::has('login'))
                          <div class="hidden fixed top-0 right-0 sm:block">
                              @auth
                                  <a href="{{ url('/dashboard') }}" class="btn btn-light">Dashboard</a>
                              @else
                                  <a href="{{ route('login') }}" class="btn btn-light">Log in</a>

                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                                  @endif
                              @endauth
                          </div>
                      @endif
              </form>
            </div>
          </nav>-->


        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
