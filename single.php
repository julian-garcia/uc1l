<?php get_header(); $category = get_the_category()[0]->slug; ?>
<?php get_template_part('templates/content', $category); ?>
<?php get_footer(); ?>
