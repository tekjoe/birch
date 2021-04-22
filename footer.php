<footer class="footer">
  <div class="insta-feed">
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </div>
  <div class="footer__details">
    <svg viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" class="footer-logo">
      <path
        d="M256 24C309.524 24.0329 361.391 42.5667 402.814 76.4617C444.238 110.357 472.671 157.529 483.298 209.987C493.924 262.445 486.091 316.964 461.124 364.308C436.157 411.652 395.591 448.91 346.3 469.77C289.626 493.602 225.811 493.97 168.865 470.794C111.92 447.617 66.499 402.79 42.5753 346.154C18.6515 289.519 18.1802 225.704 41.2648 168.721C64.3495 111.739 109.103 66.2453 165.7 42.23C194.266 30.1364 224.98 23.9358 256 24V24ZM256 8C119 8 8 119 8 256C8 393 119 504 256 504C393 504 504 393 504 256C504 119 393 8 256 8Z"
        fill="white" />
      <path
        d="M345.28 316.05C343.22 351.2 327.61 387.4 289.74 411C252.36 434.3 202.27 429.17 170.37 399.8C127.28 360.12 137.83 284.87 190.25 260.15C197.44 256.76 205.69 255.27 213.62 253.9C224.16 252.08 228.52 248.77 231.33 238.36C238.49 211.78 245.673 185.207 252.88 158.64C253.562 155.986 254.747 153.488 256.37 151.28C259.37 147.37 265.17 146.55 269.5 148.89C273.59 151.1 275.18 155.05 273.84 160.2C271.17 170.46 268.41 180.69 265.69 190.94C261.74 205.79 265.89 210.2 281.13 207.36C302.3 203.36 319.79 182.36 320.69 159.74C321.63 136.06 307.51 116.01 285.64 110.26C271.53 106.55 257.96 108.73 245.12 115.18C227.25 124.18 214.01 137.66 206.38 156.36C204.38 161.24 200 163.08 194.5 161.36C189.5 159.79 186.96 155.9 188.18 150.89C188.959 147.68 190.11 144.573 191.61 141.63C207.89 109.87 233.67 90.63 269.33 88.63C322.41 85.63 347.91 130.55 339.9 171.92C337.507 185.032 331.123 197.084 321.62 206.43C318.49 209.52 315.43 212.72 312.62 216.09C308.78 220.68 308.7 224.29 312.03 229.26C313.084 230.876 314.308 232.374 315.68 233.73C336.05 253.1 345.44 281 345.28 316.05ZM232.39 403.46C257.32 403.55 277.1 395.99 291.65 381.78C315.3 358.68 324.85 330.29 321.05 297.68C318.99 280.03 312.99 263.68 300.27 250.52C290.834 240.714 278.499 234.197 265.08 231.93C260.71 231.15 256.9 232.05 254.31 236.13C247.83 246.32 250.31 257.69 260.46 264C270.94 270.53 279.67 278.79 285.24 289.95C287.105 293.626 288.538 297.505 289.51 301.51C289.811 302.722 289.867 303.982 289.677 305.217C289.487 306.451 289.054 307.636 288.403 308.702C287.752 309.768 286.896 310.694 285.884 311.427C284.873 312.159 283.726 312.684 282.51 312.97C277.27 314.36 273.26 312.23 271.03 306.91C270.34 305.26 269.67 303.59 268.85 302.01C255.54 276.51 217.92 267.74 192.85 284.28C166.58 301.63 157.72 339.91 173.85 368.06C187.74 392.37 209.94 402.37 232.39 403.46Z"
        fill="white" />
      <path
        d="M216.57 345.35C208.39 345.04 204.45 339.83 206.57 331.99C210.09 318.657 213.637 305.37 217.21 292.13C219.41 283.93 227.92 281 234.67 286.13C237.4 288.2 238.86 290.93 237.96 294.41C234.09 309.32 230.25 324.23 226.19 339.09C225 343.43 221.26 345.53 216.57 345.35Z"
        fill="white" />
    </svg>
    <p class="address">459 E. Pleasant St., Milwaukee, WI</p>
    <div class="hours">
      <ul>
        <?php
          if (have_rows('hours')):

            while (have_rows('hours')): the_row(); ?>

        <li><?php the_sub_field('hours_description') ?></li>

        <?php
            endwhile;
          endif;

        ?>
      </ul>
      <ul>
        <?php
    if (have_rows('hours')):

      while (have_rows('hours')): the_row(); ?>

        <li><?php the_sub_field('hours_range') ?></li>

        <?php
      endwhile;
    endif;

  ?>
      </ul>
    </div>
  </div>
</footer>
<footer class="footer__bottom">
  <div class="container">
    <div class="footer__bottom--details">
      <div class="byline">Birch</div>
      <ul class="footer__nav">
        <li><a class="nav-link" href="#menu">The Menu</a></li>
        <li><span class="nav-icon">•</span></li>
        <li><a class="nav-link" href="#restaurant">The Restaurant</a></li>
        <li><span class="nav-icon">•</span></li>
        <li>
          <a class="nav-link" href="#reservations">Make Reservations</a>
        </li>
        <li><span class="nav-icon">•</span></li>
        <li><a class="nav-link" href="#catering">Catering</a></li>
        <li><span class="nav-icon">•</span></li>
        <li><a class="nav-link" href="https://www.toasttab.com/birchandbutcher/giftcards" target="_blank"
            rel="noopener">Gift Cards</a>
        </li>
      </ul>
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
</footer>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<?php wp_footer(); ?>
</body>

</html>