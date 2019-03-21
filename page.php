<?php get_header(); ?>
<div class="container main">
  <div class="row">
    <div class="col blog-posts">
      <div class="container">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part( 'content-page', get_post_format() );

        endwhile; endif;
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
