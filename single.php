<?php get_header(); $category = get_the_category()[0]->slug; ?>

<?php
  if (file_exists(get_template_directory() . '/templates/content-' . $category . '.php')) :
    get_template_part('templates/content', $category); ?>
<?php else: ?>
  <section class="full-width light">
    <h2 class="post-title"><?php the_title(); ?></h2>
    <div class="post-content">
      <?php the_content(); ?>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
