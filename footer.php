<div class="container widget-footer">
  <div class="row">
    <div class="col">
      <div class="card card-footer">
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
    </div>
    <div class="col">
      <div class="card card-footer">
        <div class="card-body">
          <h3 class="card-title">Kategori</h3>
          <p class="card-text">
            <?php
            $categories = get_categories();

            foreach ($categories as $category) {
              ?>
              <a class="card-link" href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a>
              <br>
              <?php
            }
            ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card card-footer">
        <div class="card-body">
          <h3 class="card-title">Sosial Media</h3>
          <p class="card-text">
            <i class="fab fa-instagram"></i> Instagram
            <br>
            <a class="card-link px-3" href="https://www.instagram.com/panahan_ub/" target="_blank">@panahan_ub</a>
            <br>
            <a class="card-link px-3" href="https://www.instagram.com/officialbac2019/" target="_blank">@officialbac2019</a>
            <br>
            <i class="fab fa-line"></i> Line
            <br>
            <a class="card-link px-3" href="https://line.me/R/ti/p/%40jzt1748d" target="_blank">@jzt1748d</a>
            <br>
            <a class="card-link px-3" href="https://line.me/R/ti/p/%40ofq9027c" target="_blank">@ofq9027c</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer mt-auto py-3">
  <div class="container" style="text-align: center;">
    <span style="color: #2D3436;">Copyright © 2019 Unit Aktivitas Panahan | Universitas Brawijaya</span>
  </div>
</footer>
<script type="text/javascript">
function dropdown_toggle(id){
  $('#'+id).dropdown('toggle');
}

function dropdown_show(id){
  $('#'+id).dropdown('show');
}

function dropdown_hide(id){
  $('#'+id).dropdown('hide');
}
</script>
<?php wp_footer(); ?>
</body>
</html>
