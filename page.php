<?php get_header(); ?>
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col jumbo-block">
        <h1 class="display-4"><?php echo get_bloginfo('name'); ?></h1>
        <p><?php echo get_bloginfo('description'); ?></p>
        <p><a class="btn btn-outline-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>
  </div>
</div>
<hr>
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
