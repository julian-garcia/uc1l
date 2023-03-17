<?php get_header(); ?>
<div class="full-width light">
  <div class="hero hero-home">
    <div class="hero-text">
      <h2 class="page-title">
        <?php the_field( "hero_title" ); ?>
      </h2>
      <h3 class="headline">
        <?php the_field( "hero_headline" ); ?>
      </h3>
      <a href="<?php the_field( "hero_link" ); ?>" class="button">
        <?php the_field( "hero_link_text" ); ?>
      </a>
    </div>
    <div class="hero-image">
      <div class="image" style="background-image: url(<?php the_field( "hero_image" ); ?>)">
      </div>
    </div>
  </div>
</div>
<section class="intro">
  <div class="image" style="background-image: url(<?php the_field( "intro_image" ); ?>)">
  </div>
  <div class="text">
    <h3 class="sub-title underlined"><?php the_field( "intro_title" ); ?></h3>
    <?php the_field( "intro_text" ); ?>
    <a href="<?php echo get_field('intro_button')['link'] ?>" class="button">
      <?php echo get_field('intro_button')['label'] ?>
    </a>
  </div>
</section>
<section class="cards full-width <?php the_field( "cards_background" ); ?>">
  <h3 class="sub-title text-center"><?php the_field( "cards_title" ); ?></h3>
  <h4 class="headline"><?php the_field( "cards_subtitle" ); ?></h4>
  <div class="card-grid">
    <?php for ($i = 1; $i <= 3; $i++): ?>
    <div class="card <?php echo get_field('card' . $i)['type'] ?>">
      <a class="card-link" href="<?php echo get_field('card' . $i)['button']['link'] ?>"></a>
      <div class="card-image"
        style="background-image: url(<?php echo get_field('card' . $i)['image']; ?>)">
      </div>
      <div class="card-content">
        <a href="<?php echo get_field('card' . $i)['button']['link'] ?>">
          <img class="card-icon" src="<?php echo get_field('card' . $i)['button']['icon'] ?>" alt="">
        </a>
        <h4 class="sub-title text-center"><?php echo get_field('card' . $i)['title'] ?></h4>
        <p><?php echo get_field('card' . $i)['text'] ?></p>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>
<?php
  the_content();
?>
<?php get_footer(); ?>
