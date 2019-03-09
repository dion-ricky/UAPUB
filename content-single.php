<div class="row post" style="margin-top: 2em;">
  <div class="col">
    <h1><a href="<?php the_permalink(); ?>" class="post-link"><?php the_title(); ?></a></h1>
    <h6>Posted on <?php the_date(); ?></h6>
    <hr>
    <br>
    <?php the_content(); ?>
    <hr>
    <h6>Posted in <a href="<?php echo get_category_link(get_the_category($post->ID)[0]->term_id); ?>" class="post-link"><?php echo get_the_category($post->ID)[0]->name; ?></a></h6>
    <hr>
  </div>
</div>
