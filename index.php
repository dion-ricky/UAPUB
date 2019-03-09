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

          get_template_part( 'content', get_post_format() );

        endwhile;

        $nextLink = get_next_posts_link();
        if ($nextLink != null) {
          preg_match_all('/href=[\'"]([\w\d\.\/\:]*)[\'"]/m', $nextLink, $matches, PREG_SET_ORDER, 0);
        ?>

          <a class="btn btn-outline-primary btn-post" href="<?php echo ($matches[0][1]) ?>" role="button">Older post</a>

        <?php
        } else {
        ?>

          <a class="btn btn-outline-primary btn-post disabled" href="#" role="button">Older post</a>

        <?php
        }
        $previousLink = get_previous_posts_link();
        if($previousLink != null){
          preg_match_all('/href=[\'"]([\w\d\.\/\:]*)[\'"]/m', $previousLink, $matches, PREG_SET_ORDER, 0);
        ?>

          <a class="btn btn-primary btn-post" href="<?php echo ($matches[0][1]); ?>" role="button">Newer post</a>

        <?php
        } else {
        ?>

          <a class="btn btn-primary btn-post disabled" href="#" role="button">Newer post</a>

        <?php
        }
        endif;
        ?>
      </div>

    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
