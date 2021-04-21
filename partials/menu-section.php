<section class="menu" id="menu">
  <div class="menu__container">
    <h2>The Menus</h2>
    <?php if (get_field('menu_one') and get_field('menu_one_title')): ?>
    <article class="menu__generic">
      <h4 class="menu__subtitle"><?php the_field('menu_one_title') ?></h4>
      <div class="menu__image">
        <?php if (get_field('menu_one_image')): ?>
        <img src="<?php the_field('menu_one_image'); ?>" alt="Birch + Butcher Food" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/food/'; ?>birch_charcuterie.jpg"
          alt="Birch + Butcher Charcuterie">
        <?php endif; ?>
      </div>
      <?php if (get_field('menu_one_sub_menu_one') and get_field('menu_one_sub_menu_one_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_one_sub_menu_one_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_one_sub_menu_one_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_one_sub_menu_two') and get_field('menu_one_sub_menu_two_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_one_sub_menu_two_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_one_sub_menu_two_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_one_sub_menu_three') and get_field('menu_one_sub_menu_three_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_one_sub_menu_three_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_one_sub_menu_three_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_one_sub_menu_four') and get_field('menu_one_sub_menu_four_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_one_sub_menu_four_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_one_sub_menu_four_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
    </article>
    <?php endif; ?>

    <?php if (get_field('menu_two') and get_field('menu_two_title')): ?>
    <article class="menu__generic">
      <h4 class="menu__subtitle"><?php the_field('menu_two_title') ?></h4>
      <div class="menu__image">
        <?php if (get_field('menu_two_image')): ?>
        <img src="<?php the_field('menu_two_image'); ?>" alt="Birch + Butcher Food" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/food/'; ?>birch_charcuterie.jpg"
          alt="Birch + Butcher Charcuterie">
        <?php endif; ?>
      </div>
      <?php if (get_field('menu_two_sub_menu_one') and get_field('menu_two_sub_menu_one_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_two_sub_menu_one_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_two_sub_menu_one_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_two_sub_menu_two') and get_field('menu_two_sub_menu_two_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_two_sub_menu_two_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_two_sub_menu_two_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_two_sub_menu_three') and get_field('menu_two_sub_menu_three_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_two_sub_menu_three_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_two_sub_menu_three_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_two_sub_menu_four') and get_field('menu_two_sub_menu_four_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_two_sub_menu_four_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_two_sub_menu_four_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
    </article>
    <?php endif; ?>

    <?php if (get_field('menu_three') and get_field('menu_three_title')): ?>
    <article class="menu__generic">
      <h4 class="menu__subtitle"><?php the_field('menu_three_title') ?></h4>
      <div class="menu__image">
        <?php if (get_field('menu_three_image')): ?>
        <img src="<?php the_field('menu_three_image'); ?>" alt="Birch + Butcher Food" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/food/'; ?>birch_charcuterie.jpg"
          alt="Birch + Butcher Charcuterie">
        <?php endif; ?>
      </div>
      <?php if (get_field('menu_three_sub_menu_one') and get_field('menu_three_sub_menu_one_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_one_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_one_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_three_sub_menu_two') and get_field('menu_three_sub_menu_two_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_two_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_two_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_three_sub_menu_three') and get_field('menu_three_sub_menu_three_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_three_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_three_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_three_sub_menu_four') and get_field('menu_three_sub_menu_four_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_four_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_four_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
    </article>
    <?php endif; ?>

    <?php if (get_field('menu_four') and get_field('menu_four_title')): ?>
    <article class="menu__generic">
      <h4 class="menu__subtitle"><?php the_field('menu_four_title') ?></h4>
      <div class="menu__image">
        <?php if (get_field('menu_four_image')): ?>
        <img src="<?php the_field('menu_four_image'); ?>" alt="Birch + Butcher Food" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/food/'; ?>birch_charcuterie.jpg"
          alt="Birch + Butcher Charcuterie">
        <?php endif; ?>
      </div>
      <?php if (get_field('menu_four_sub_menu_one') and get_field('menu_four_sub_menu_one_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_four_sub_menu_one_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_four_sub_menu_one_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_four_sub_menu_two') and get_field('menu_four_sub_menu_two_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_four_sub_menu_two_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_four_sub_menu_two_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_three_sub_menu_three') and get_field('menu_three_sub_menu_three_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_three_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_three_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (get_field('menu_three_sub_menu_four') and get_field('menu_three_sub_menu_four_title')): ?>
      <div class="menu__subsection">
        <h5><?php the_field('menu_three_sub_menu_four_title') ?></h5>
        <ul>
          <?php while (have_rows('menu_three_sub_menu_four_items')): the_row(); ?>
          <li>
            <div class="menu__item">
              <?php the_sub_field('name') ?>
            </div>
            <div class="menu__price">
              <?php the_sub_field('price') ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
    </article>
    <?php endif; ?>
    <?php if (get_field('bar_description')): ?>
    <article class="menu__bar">
      <h4 class="menu__subtitle">The Bar</h4>
      <div class="menu__image">
        <?php if (get_field('bar_image')): ?>
        <img src="<?php the_field('bar_image'); ?>" alt="Birch + Butcher Bar" />
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/images/food/'; ?>birch_cocktails.jpg"
          alt="Birch + Butcher Bar">
        <?php endif; ?>
      </div>
      <p class="bar-description"><?php the_field('bar_description'); ?></p>
      <div class="menu__subsection">
        <?php
        $featured_cocktail = get_field('featured_cocktail');
        if ($featured_cocktail): ?>
        <small>featured cocktail</small>
        <h6><?php echo $featured_cocktail['title'] ?></h6>
        <p><?php echo $featured_cocktail['description'] ?></p>
        <a href="<?php echo $featured_cocktail['link'] ?>" class="button" target="_blank"><span>View All Beer, Cocktails
            + Liquor</span></a>
        <?php endif; ?>
      </div>
      <div class="menu__subsection">
        <?php
        $featured_wine = get_field('featured_wine');
        if ($featured_wine): ?>
        <small>featured wine</small>
        <h6><?php echo $featured_wine['title'] ?></h6>
        <p><?php echo $featured_wine['description'] ?></p>
        <a href="<?php echo $featured_wine['link'] ?>" class="button" target="_blank"><span>View All Domestic
            Wines</span></a>
        <?php endif; ?>
      </div>
    </article>
    <?php endif ?>
    <div class="order-online">
      <a href="https://www.toasttab.com/birchandbutcher/v2/online-order#!/" class="button button__primary"
        target="_blank" rel="noopener" rel="noreferrer"><span>Order Online</span></a>
    </div>
  </div>
</section>