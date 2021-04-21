<section class="intro">
  <div class="intro__title">
    <h1>Birch</h1>
  </div>
  <div class="intro__body">
    <?php the_field('intro_body'); ?>
  </div>
  <div class="intro__hours">
    <h4>Restaurant Hours</h4>
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
    <p><strong>Reservations by phone:</strong> <a href="tel:414-323-7372">(414) 323-7372</a></p>
    <div class="button-group">
      <a href="https://www.opentable.com/restref/client/?rid=1004269&restref=1004269&r3uid=UhmvkxXZ1&corrid=fb223688-5f7e-4cac-af13-60a1962247da"
        class="button button__primary" target="_blank" rel="noopener" rel="noreferrer"><span>Reserve a Table</span></a>
      <a href="https://www.toasttab.com/birchandbutcher/v3#!/" class="button button__primary" target="_blank"
        rel="noopener" rel="noreferrer"><span>Order Online</span></a>
    </div>
  </div>
</section>