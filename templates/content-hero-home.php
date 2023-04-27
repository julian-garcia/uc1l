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
    <a href="<?php echo get_field( "secondary_link" )['link']; ?>" class="button" target="_blank">
      <?php echo get_field( "secondary_link" )['text']; ?>
    </a>
  </div>
  <div class="hero-image">
    <div class="image" style="background-image: url(<?php the_field( "hero_image" ); ?>)">
    </div>
  </div>
</div>
