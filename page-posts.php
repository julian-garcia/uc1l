<?php get_header(); ?>
<?php the_content(); ?>
<?php if (isset($_GET['cat'])) { $cat = $_GET['cat']; } ?>
<section class="posts full-width light-primary">
  <form action="/posts" method="post" class="post-filter" id="postFilterForm">
    <div class="filter-category">
      <?php if (isset($_POST['filter'])): ?>
        <input type="radio" name="filter" id="filter-all" value="all" <?php echo $_POST['filter'] == 'all' ? 'checked' : '' ?>>
      <?php else: ?>
        <input type="radio" name="filter" id="filter-all" value="all" checked>
      <?php endif; ?>
      <label for="filter-all">
        All <i class="icon-all"></i>
      </label>
    </div>
    <?php $categories = get_categories( array(
      'orderby' => 'name',
      'order'   => 'ASC' ));
      foreach( $categories as $category ): ?>
      <div class="filter-category">
        <?php if (isset($_POST['filter'])): ?>
          <input type="radio" name="filter" id="filter-<?php echo $category->slug; ?>" value="<?php echo $category->slug; ?>" <?php echo $_POST['filter'] == $category->slug ? 'checked' : '' ?>>
        <?php elseif($cat): ?>
          <input type="radio" name="filter" id="filter-<?php echo $category->slug; ?>" value="<?php echo $category->slug; ?>" <?php echo $cat == $category->slug ? 'checked' : '' ?>>
        <?php else: ?>
          <input type="radio" name="filter" id="filter-<?php echo $category->slug; ?>" value="<?php echo $category->slug; ?>">
        <?php endif; ?>
        <label for="filter-<?php echo $category->slug; ?>">
          <?php echo $category->name; ?>
          <i class="icon-<?php echo $category->slug; ?>"></i>
        </label>
      </div>
    <?php endforeach; ?>
  </form>
  <div class="post-grid">
    <?php
      if (isset($_POST['filter'])) {
        if ($_POST['filter'] != 'all') {
          $options = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'category_name' => $_POST['filter']
          );
        } else {
          $options = array( 'post_type' => 'post', 'posts_per_page' => 6 );
        }
      } else if ($cat) {
        $options = array(
          'post_type' => 'post',
          'posts_per_page' => 6,
          'category_name' => $cat
        );
      } else {
        $options = array( 'post_type' => 'post', 'posts_per_page' => 6 );
      }
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $post_query = new WP_Query(
        array_merge($options, array('paged' => $paged, 'orderby' => 'rand'))
      );
      while($post_query->have_posts() ): $post_query->the_post(); ?>
      <div class="post-grid-card">
        <?php if (get_the_post_thumbnail_url()): ?>
          <div class="post-image"
            style="background-image: url(<?php the_post_thumbnail_url('medium') ?>">
          </div>
        <?php else: ?>
          <div class="post-image">
            <i class="icon-<?php echo get_the_category()[0]->slug; ?>"></i>
          </div>
        <?php endif; ?>
        <a class="post-link" href="<?php the_permalink() ?>" aria-label="<?php the_title(); ?>"></a>
        <h3 class="post-title"><?php the_title(); ?></h3>
        <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
      </a>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="post-grid-pagination">
    <?php
      echo paginate_links( array(
        'base' => str_replace( 999999, '%#%', esc_url( get_pagenum_link( 999999 ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $post_query->max_num_pages,
        'prev_text' => '<',
        'next_text' => '>',
      )); ?>
  </div>
</section>
<?php get_footer(); ?>
