<section class="carousel--bottom">

  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <?php
      $images = get_field('bottom_carousel');
      if ($images): ?>
      <ul class="glide__slides">
        <?php foreach ($images as $image): ?>
        <li class="glide__slide">
          <img data-excluded="true" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt'])?>" />
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif ?>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" aria-hidden="true" data-glide-dir="<">
        ←
      </button>
      <button class="glide__arrow glide__arrow--right" aria-hidden="true" data-glide-dir=">">
        →
      </button>
    </div>
  </div>
</section>