<?php get_header(); ?>

<div class="full-width light">
  <?php get_template_part('templates/content', 'hero-home'); ?>
</div>

<section class="intro">
  <div class="image" style="background-image: url(<?php the_field( "intro_image" ); ?>)">
  </div>
  <div class="text">
    <h2 class="sub-title underlined"><?php the_field( "intro_title" ); ?></h2>
    <?php the_field( "intro_text" ); ?>
    <a href="<?php echo get_field('intro_button')['link'] ?>" class="button">
      <?php echo get_field('intro_button')['label'] ?>
    </a>
  </div>
</section>

<?php get_template_part('templates/content', 'cards'); ?>
<?php get_template_part('templates/content', 'testimonials'); ?>

<?php the_content(); ?>
<?php get_footer(); ?>
