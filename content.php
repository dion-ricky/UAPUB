<div class="row post">
  <div class="col-3 post-image-holder">
    <?php
    if (get_the_post_thumbnail($post) != null){
      the_post_thumbnail();
    } else {
    ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/placeholder.png" class="post-image" width="200px" height="200px" alt="Gambar"/>
    <?php } ?>
  </div>
  <div class="col">
    <div class="post-image-mobile-holder" style="max-height: 150px; overflow: hidden; margin-bottom:1rem;">
      <?php
      if (get_the_post_thumbnail($post) != null){
        the_post_thumbnail();
      } else {
      ?>
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/placeholder.png" class="post-image-mobile" width="500px" height="500px" alt="Gambar" />
      <?php } ?>
    </div>
    <h6><a href="<?php echo get_category_link(get_the_category($post->ID)[0]->term_id); ?>" class="post-link"><?php echo get_the_category($post->ID)[0]->name; ?></a></a></h6>
    <h3><a href="<?php the_permalink(); ?>" class="post-link"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
  </div>
</div>
