<?php get_header(); ?>
<div class="container main">
  <div class="row">
    <div class="col blog-posts">
      <div class="container">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();

          get_template_part( 'content-single', get_post_format() );

          if ( comments_open() || get_comments_number() ) :
        	  comments_template();
        	endif;

        endwhile; endif;
        ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
