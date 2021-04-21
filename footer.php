<footer class="footer">
  <div class="insta-feed">
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </div>
  <div class="footer__details">
    <img src="<?php echo get_template_directory_uri() . '/images/'; ?>B+B Logo.png" alt="Birch Logo"
      class="footer-logo" />
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
        <li><a href="https://www.facebook.com/birchandbutcher/" target="_blank" rel="noopener"
            aria-label="Follow Birch + Butcher on Facebook"><i class="fab fa-facebook-square fa-lg"></i></a></li>
        <li><a href="https://www.instagram.com/birchandbutcher/" target="_blank" rel="noopener"
            aria-label="Follow Birch + Butcher on Instagram"><i class="fab fa-instagram fa-lg"></i></a></li>
        <li><a href="https://g.page/birchandbutcher?share" target="_blank" rel="noopener"
            aria-label="Review Birch + Butcher on Google"><i class="fab fa-google-plus-square fa-lg"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<?php wp_footer(); ?>
</body>

</html>