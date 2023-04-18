<?php get_header(); ?>
<?php get_template_part('templates/content', 'hero'); ?>
<?php get_template_part('templates/content', 'intro'); ?>
<section class="relative">
  <?php the_content(); ?>
</section>
<?php get_footer(); ?>
