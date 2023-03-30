<?php if (get_field( "intro_text" )): ?>
<section class="intro">
  <div class="image <?php the_field( "image_size" ); ?>" style="background-image: url(<?php the_field( "intro_image" ); ?>)">
  </div>
  <div class="text">
    <?php if (get_field( "intro_title" )): ?>
    <h2 class="sub-title underlined"><?php the_field( "intro_title" ); ?></h2>
    <?php endif; ?>
    <?php the_field( "intro_text" ); ?>
    <?php if (get_field( "intro_button" )['link']): ?>
    <a href="<?php echo get_field('intro_button')['link'] ?>" class="button">
      <?php echo get_field('intro_button')['label'] ?>
    </a>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
