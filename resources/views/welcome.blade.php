<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Laravel </title>

    </head>
    <body >
        <div >
            @if (Route::has('login'))
                <div >

                    @auth

                        <a href="{{ url('/home') }}" >
                            Home
                        </a>

                    @else

                        <a href="{{ route('login') }}">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        @endif

                    @endauth

                </div>
            @endif 
        </div>
        <div>

            <h1>Hi</h1>

        </div>
    </body>
</html>
