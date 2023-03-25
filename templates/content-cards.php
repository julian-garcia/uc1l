<section class="cards full-width <?php the_field( "cards_background" ); ?>">
  <h2 class="sub-title text-center"><?php the_field( "cards_title" ); ?></h2>
  <h4 class="headline"><?php the_field( "cards_subtitle" ); ?></h4>
  <div class="card-grid">
    <?php for ($i = 1; $i <= 3; $i++): ?>
    <div class="card <?php echo get_field('card' . $i)['type'] ?>">
      <a class="card-link" href="<?php echo get_field('card' . $i)['button']['link'] ?>"></a>
      <div class="card-image"
        style="background-image: url(<?php echo get_field('card' . $i)['image']; ?>)">
      </div>
      <div class="card-content">
        <a href="<?php echo get_field('card' . $i)['button']['link'] ?>"
          class="<?php if (get_field('card' . $i)['button']['label']) {echo 'card-label-link';} ?>">
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
    <?php endfor; ?>
  </div>
</section>
