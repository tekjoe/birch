<section class="restaurant" id="restaurant">
  <h3>The Restaurant</h3>
  <div class="restaurant-card">
    <?php
        $kitchen = get_field('our_kitchen');
        if ($kitchen): ?>
    <img src="<?php echo $kitchen['kitchen_image']?>" alt="Birch + Butcher's Kitchen" />
    <div class="restaurant-card__info">
      <h4>Our Kitchen</h4>
      <p>
        <?php echo $kitchen['kitchen_description'] ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
  <div class="restaurant-card">
    <?php
        $menu = get_field('our_menu');
        if ($menu): ?>
    <img src="<?php echo $menu['menu_image'] ?>" alt="Birch + Butcher's Menu" />
    <div class="restaurant-card__info">
      <h4>Our Menu</h4>
      <p>
        <?php echo $menu['menu_description'] ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
  <div class="restaurant-card">
    <?php
        $team = get_field('our_team');
        if ($team): ?>

    <img src="<?php echo $team['team_image']?>" alt="Birch + Butcher's Staff" />
    <div class="restaurant-card__info">
      <h4>Our Staff</h4>
      <p>
        <?php echo $team['team_description'] ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
  </div>
</section>