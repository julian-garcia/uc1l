<section class="slider">
  <h2 class="sub-title text-center !mb-0">Our Clients Say:</h2>
  <div class="swiper testimonials">
    <div class="swiper-wrapper">
    <?php
      $the_query = new WP_Query( array( 'post_type' => 'testimonial' ) );
      if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="swiper-slide">
              <div class="angled-background"></div>
              <p class="testimonial-name"><?php the_title(); ?></p>
              <div class="testimonial-text"><?php the_content(); ?></div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
