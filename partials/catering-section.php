<section class="catering" id="catering">
  <div class="container">
    <div class="catering__content">
      <div class="catering__content--body">
        <h4>Dinner at Your Place?</h4>
        <?php
        $catering = get_field('catering');
        if ($catering): ?>
        <p><?php echo $catering['body'] ?></p>
        <a href="<?php echo $catering['wedding_link'] ?>" class="button button__primary" target="_blank"><span>View
            Wedding Menu</span></a>
        <a href="<?php echo $catering['corporate_link'] ?>" class="button button__primary" target="_blank"><span>View
            Corporate Menu</span></a>
        <?php endif; ?>
      </div>
      <figure class="polaroid">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>catering.jpeg"
          alt="Birch + Butcher Catering" />
      </figure>
    </div>
  </div>
</section>