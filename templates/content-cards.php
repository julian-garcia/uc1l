<section class="cards full-width <?php the_field( "cards_background" ); ?>">
  <h2 class="sub-title text-center"><?php the_field( "cards_title" ); ?></h2>
  <h4 class="headline"><?php the_field( "cards_subtitle" ); ?></h4>
  <div class="card-grid">
    <?php for ($i = 1; $i <= 6; $i++): ?>
    <?php if (get_field('card' . $i)['text']): ?>
    <div class="card <?php echo get_field('card' . $i)['type'] ?>">
      <a class="card-link" href="<?php echo get_field('card' . $i)['button']['link'] ?>" aria-label="<?php echo get_field('card' . $i)['title'] ?>"></a>
      <?php $image_options = implode(' ', get_field('card' . $i)['card_image_options']); ?>
      <div class="card-image <?php echo $image_options; ?>"
        style="background-image: url(<?php echo get_field('card' . $i)['image']; ?>)">
      </div>
      <div class="card-content">
        <a href="<?php echo get_field('card' . $i)['button']['link'] ?>"
          class="<?php if (get_field('card' . $i)['button']['label']) {echo 'card-label-link';} ?>" aria-label="<?php echo get_field('card' . $i)['title'] ?>">
          <?php if (get_field('card' . $i)['button']['icon']): ?>
          <img class="card-icon" src="<?php echo get_field('card' . $i)['button']['icon'] ?>" alt="">
          <?php endif; ?>
          <?php if (get_field('card' . $i)['button']['label']): ?>
          <span class="card-label">
            <?php echo get_field('card' . $i)['button']['label']; ?>
          </span>
          <?php endif; ?>
        </a>
        <h4 class="sub-title text-center">
          <?php echo get_field('card' . $i)['title'] ?>
        </h4>
        <p><?php echo get_field('card' . $i)['text'] ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php endfor; ?>
  </div>
</section>
