<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A Hyper-Seasonal New American Restaurant Cooking Over Open Fire" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Birch | A Hyper-Seasonal New American Restaurant Cooking Over Open Fire</title>
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127178111-6"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-127178111-6');
  </script>

</head>

<body>
  <header>
    <div class="container">
      <div class="navigation">
        <a class="logo " href="#"><img src="<?php echo get_template_directory_uri() . '/images/'; ?>birch_logo_dark.png"
            alt="Birch + Butcher Logo" /></a>
        <nav>
          <ul>
            <li><a class="nav-link" href="#menu">The Menu</a></li>
            <li><a class="nav-link" href="#restaurant">Restaurant</a></li>
            <li><a class="nav-link" href="#reservations">Reservations</a></li>
            <li><a class="nav-link" href="#catering">Catering</a></li>
            <li><a class="nav-link" href="https://www.toasttab.com/birchandbutcher/giftcards" target="_blank"
                rel="noopener">Gift
                Cards</a></li>
            <li><a class="nav-link" href="https://www.toasttab.com/birchandbutcher/v3#!/" target="_blank"
                rel="noopener">Order Online</a></li>
          </ul>
        </nav>
        <ul class="social">
          <li><a href="https://www.facebook.com/birchonpleasant" target="_blank" rel="noopener"
              aria-label="Follow Birch + Butcher on Facebook"><i class="fab fa-facebook-square fa-lg"></i></a></li>
          <li><a href="https://www.instagram.com/birchonpleasant/" target="_blank" rel="noopener"
              aria-label="Follow Birch + Butcher on Instagram"><i class="fab fa-instagram fa-lg"></i></a></li>
          <li><a href="https://g.page/birchonpleasant?share" target="_blank" rel="noopener"
              aria-label="Review Birch + Butcher on Google"><i class="fab fa-google-plus-square fa-lg"></i></a></li>
        </ul>

      </div>

    </div>
  </header>
  <?php get_template_part('partials/mobile-nav'); ?>