<?php get_header(); ?>
<div class="jumbotron">
  <div class="container">
    <img class="jumbotron-image" src="<?php echo get_bloginfo('template_directory'); ?>/assets/brone_bac.png" alt="">
    <div class="row">
      <div class="col jumbo-block">
        <h1 class="display-4">Brawijaya Archery Championship II 2019</h1>
        <p>Prepare your team now!!!!<br>Brawijaya Archery Championship II 2019 adalah kompetisi panahan kedua kalinya yang telah berhasil dilaksanakan di Universitas Brawijaya serta menyuguhkan total hadiah puluhan juta rupiah dan medali untuk tim tim hebat.<br><br>Catat dan lingkari tanggal penting pendaftarannya. Jangan sampai terlewatkan.<br>Persiapkan tim kalian dan jadilah juara pertama kali di BAC 2019 ini.<br><br>For further information please follow and stay tune on our official account:<br><i class="fab fa-line"></i> Line: <a href="https://line.me/R/ti/p/%40ofq9027c">@ofq9027c</a><br><i class="fab fa-instagram"></i> IG: <a href="https://www.instagram.com/officialbac2019/">@officialbac2019</a></p>
        <p><a class="btn btn-outline-uap btn-lg" href="./category/brawijaya-archery-championship" role="button">Learn more »</a></p>
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

          <a class="btn btn-outline-uap btn-post" href="<?php echo ($matches[0][1]) ?>" role="button">Older post</a>

        <?php
        } else {
        ?>

          <a class="btn btn-outline-uap btn-post disabled" href="#" role="button">Older post</a>

        <?php
        }
        $previousLink = get_previous_posts_link();
        if($previousLink != null){
          preg_match_all('/href=[\'"]([\w\d\.\/\:]*)[\'"]/m', $previousLink, $matches, PREG_SET_ORDER, 0);
        ?>

          <a class="btn btn-uap btn-post" href="<?php echo ($matches[0][1]); ?>" role="button">Newer post</a>

        <?php
        } else {
        ?>

          <a class="btn btn-uap btn-post disabled" href="#" role="button">Newer post</a>

        <?php
        }
        endif;
        ?>
      </div>

    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
