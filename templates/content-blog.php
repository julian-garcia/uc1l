<section class="full-width light-primary">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <div class="post-content">
    <?php get_template_part('templates/content', 'social-share'); ?>
    <a class="post-back" href="/posts" aria-label="back">Other posts</a>
    <?php the_content(); ?>
  </div>
</section>
