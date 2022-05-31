<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>COVID-Free Travel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=1280px, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,400&family=Nunito:wght@400;500&display=swap');
</style>

<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/core.css">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="js/main.js"></script> -->
</head>
<body class="antialiased globalContainer">
<header>
    <div class="logoImage">
<img src="images/nsw_logo.jpeg" width="150px"></a></div>
<h2>COVID-Free Travel</h2>
<div class="login">
<p class="order-call show-order-form">You're a guest, Log in</a></p></div>
</header>
<hr>
<section>
  <nav id="menu-left">
    <ul>
      <li class="menu-item"><a href="{{ url('/') }}">COVID Info</a></li>
      <li class="menu-item"><a href="/promo-hotspots">Hotspots</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>COVID hotspot zones</h1>
    <div class="postimage">
    <img src="images/post1_pict.jpeg" alt="picture of COVID test procedure, and microb pic">
</div>
    <p>
You need to login to see current infected zones.

Temporarily showing only few lines as demo. Sign in to get full version.
<br>

  </article>
</section>



<footer>
<?php
date_default_timezone_set("Australia/Sydney");
echo "Today in NSW is " . date("l") . " " . date("d")."<br>". date("h:i:sa");
?>
</footer>

</body>

</html>