<section class="full-width light">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <div class="post-content">
    <img class="team-member-image" src="<?php the_post_thumbnail_url() ?>" alt="">
    <?php the_content(); ?>
  </div>
</section>
