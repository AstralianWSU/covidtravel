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
        
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            
        </style>
  
        <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased globalContainer">

    <header>
    <div class="logoImage">
<img src="images/nsw_logo.jpeg" width="150px"></a></div>
<h2>COVID-Free Travel</h2>
<div class="login">
<p class="order-call show-order-form">You're a guest, <a href="{{ route('login') }}">Log in</a></p></div>

</header>

<hr>            
        <section>
  <nav id="menu-left">
    <ul>
      <li class="menu-item"><a href="/">COVID Info</a></li>
      <li class="menu-item"><a href="{{ route('promohotspots') }}">Hotspots</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>COVID Testing</h1>
    <div class="postimage">
    <img src="images/post1_pict.jpeg" alt="picture of COVID test procedure, and microb pic">
</div>
    <p>
Seek urgent medical attention if you have serious symptoms, such as: difficulty breathing blue lips or face
pain or pressure in the chest cold and clammy, or pale and mottled, skin fainting or collapsing
being confused becoming difficult to wake up little or no urine output coughing up blood
    </p>
    
  </article>
</section>

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
