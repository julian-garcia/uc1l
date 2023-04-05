<div class="full-width <?php the_field('hero_background'); ?>">
  <div class="hero hero-page <?php the_field('hero_alignment'); ?>
    <?php the_field('hero_type'); ?>">
    <div class="hero-text">
      <h2 class="page-title">
        <?php the_title() ?>
      </h2>
      <h3 class="sub-title">
        <?php the_field( "hero_subheading" ); ?>
      </h3>
      <h3 class="headline">
        <?php the_field( "hero_headline" ); ?>
      </h3>
    </div>
    <?php if (get_field( "hero_intro" )): ?>
    <div class="hero-intro">
      <p>
        <?php the_field( "hero_intro" ); ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
</div>
