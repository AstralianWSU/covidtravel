<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1280px, initial-scale=1">

        <title>COVID-Free Travel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,400&family=Nunito:wght@400;500&display=swap');
        </style>
        <!-- Styles -->

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/core.css">
        <!-- <link rel="stylesheet" href="{{ url('/css/main.css') }}">
        <link rel="stylesheet" href="{{ url('/css/core.css') }}"> -->
        <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased globalContainer">

    <header>
    <div class="logoImage">
    <a href="{{ url('/') }}"><img src="images/nsw_logo.jpeg" width="150px"></a></div>
<h2>COVID-Free Travel</h2>
<div class="login">
<p class="order-call show-order-form">Welcome, <?php $nickname = Auth::user()->nickname;print_r($nickname); ?>! <a href="{{ route('logout') }}">Log out</a></p></div>
</header>
<hr>

        <nav id="menu-left">
            <ul>
            <li class="menu-item"><a href="{{ url('/') }}">COVID Info</a></li>
            <li class="menu-item"><a href="#">Hotspots</a></li>
            <li class="menu-item"><a href="#">Search Place</a></li>
            <li class="menu-item"><a href="{{ route('reporting')}}">Route Builder</a></li>
            <li class="menu-item"><a href="{{ route('history')}}">History</a></li>
            </ul>
        </nav>


@yield('content')

<footer>
<?php
date_default_timezone_set("Australia/Sydney");
echo "Today in NSW is " . date("l") . " " . date("d")."<br>". date("h:i:sa");
?>
</footer>
</div>
        </div>
        </div>
                   <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
