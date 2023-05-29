<section class="full-width light">
  <h2 class="post-title"><?php the_title(); ?></h2>
  <div class="post-content">
    <a class="post-back" href="/posts?cat=event" aria-label="back">Back to events</a>
    <div class="event-details">
      <div class="event-date-time">
        <h3 class="event-date"><?php the_field('event_date'); ?></h3>
        <h3 class="event-time">
          <?php the_field('event_start_time'); ?> -
          <?php the_field('event_end_time'); ?>
        </h3>
        <?php if(get_field("event_button")["link"]): ?>
        <a href="<?php echo get_field("event_button")["link"]; ?>" target="_blank" class="button">
          <?php echo get_field("event_button")["label"]; ?>
        </a>
        <?php endif; ?>
      </div>
      <div class="event-overview">
        <h4><?php the_excerpt(); ?></h4>
      </div>
    </div>
    <?php the_content(); ?>
  </div>
</section>
