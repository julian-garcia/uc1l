<section class="full-width light-primary">
  <div class="mission">
    <div class="mission-title">
      <h2 class="sub-title"><?php the_field('mission_title'); ?></h2>
      <h3><?php the_field('mission_headline'); ?></h3>
    </div>
    <div class="statements">
      <div class="statement">
        <img src="<?php the_field('vision_icon'); ?>" alt="">
        <div class="statement-text">
          <div class="background"
            style="background-image: url(<?php the_field('vision_icon'); ?>)">
          </div>
          <?php the_field('vision_text'); ?>
        </div>
      </div>
      <div class="statement">
        <img src="<?php the_field('mission_icon'); ?>" alt="">
        <div class="statement-text">
          <div class="background"
            style="background-image: url(<?php the_field('mission_icon'); ?>)">
          </div>
          <?php the_field('mission_text'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
