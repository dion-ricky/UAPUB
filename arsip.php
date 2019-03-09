<div class="card">
  <div class="card-body">
    <h3 class="card-title">Arsip</h3>
    <p class="card-text">
      <?php
      $archives = wp_get_archives(array('type' => 'monthly', 'echo' => 0));
      preg_match_all('/href=[\'"]([\w\d\.\/\:]*)[\'"]>([\w\s\d\,]*)</m', $archives, $matches, PREG_SET_ORDER, 0);
      foreach($matches as $archive){
      ?>
      <a class="card-link" href="<?php echo $archive[1]; ?>"><?php echo $archive[2] ?></a>
      <br>
      <?php } ?>
    </p>
  </div>
</div>
