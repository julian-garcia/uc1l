<?php get_header(); ?>

<div class="full-width light">
  <?php get_template_part('templates/content', 'hero-home'); ?>
</div>

<?php get_template_part('templates/content', 'intro'); ?>
<?php get_template_part('templates/content', 'cards'); ?>
<?php get_template_part('templates/content', 'testimonials'); ?>

<div class="full-width light-primary">
  <?php get_template_part('templates/content', 'text-image-block'); ?>
</div>

<?php the_content(); ?>
<?php get_footer(); ?>
