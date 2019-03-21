<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/fonts/kertayasa.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <img class="mr-3 uap-logo-nav" src="<?php echo get_bloginfo('template_directory'); ?>/assets/uap_logo@0.5x.png" width="5%" height="5%" alt="UAP LOGO">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a class="text-dark link-style-none" href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h5>
    <nav class="my-2 my-md-0 mr-md-3 menu-desktop">
    <div class="row nav-menu">
      <?php
      $nav_menu = wp_get_nav_menus();
      $nav_items = wp_get_nav_menu_items($nav_menu[0]);
      $id = 0;
      foreach($nav_items as $nav_item){
        $countChild = 0;
        foreach($nav_items as $nav_itemTemp){
          if($nav_itemTemp->menu_item_parent == (string)$nav_item->ID){
            $countChild++;
          }
        }
        if($nav_item->menu_item_parent == "0"){
      ?>
      <div class="col">
      <div class="dropdown">
      <?php
          if($countChild!=0){
      ?>
      <button class="btn <?php echo ($countChild!=0) ? "dropdown-toggle" : "dropdown-nav" ?>" type="button" id="<?php echo "dropdown".$id ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="dropdown_show(this.id)" onmouseout="dropdown_hide(this.id)">
      <?php echo $nav_item->title; ?>
      </button>

      <div class="dropdown-menu" id="<?php echo "dropdown".$id ?>" aria-labelledby="<?php echo "dropdown".$id ?>" onmouseover="dropdown_show(this.id)" onmouseout="dropdown_hide(this.id)">
      <?php
            foreach($nav_items as $nav_itemTemp){
              if($nav_itemTemp->menu_item_parent == (string)$nav_item->ID){
      ?>
      <a class="dropdown-item" href="<?php echo $nav_itemTemp->url ?>"><?php echo $nav_itemTemp->title ?></a>
      <?php
              }
            }
            echo "</div>";
          } else {
      ?>
      <a class="btn dropdown-nav" href="<?php echo $nav_item->url ?>" role="button"><?php echo $nav_item->title ?></a>
      <?php
          }
          $id++;
          echo "</div>";
          echo "</div>";
        }
      }
      ?>
    </div>
    </nav>
    <div class="accordion menu-mobile" id="accordionMenu">
      <div class="card">
        <button class="btn btn-outline-uap" id="headingOne" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Menu &nbsp;<i class="fas fa-bars"></i>
        </button>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionMenu">
          <?php
          $id = 0;
          foreach($nav_items as $nav_item){
            $countChild = 0;
            foreach($nav_items as $nav_itemTemp){
              if($nav_itemTemp->menu_item_parent == (string)$nav_item->ID){
                $countChild++;
              }
            }
            if($nav_item->menu_item_parent == "0"){
          ?>
          <a class="btn btn-uap mobile-menu-button" <?php echo ($countChild!=0) ? "data-toggle='collapse'" : "" ?> href="<?php echo ($countChild==0) ? $nav_item->url : "#collapse".$id; ?>" role="button" <?php echo ($countChild!=0) ? "aria-expanded='false'" : ""; echo ($countChild!=0) ? "aria-controls='collapse".$id."'" : "" ?> >
          <?php echo $nav_item->title; ?>
          </a>
          <?php
              if($countChild!=0){
          ?>
          <div class="collapse" id="<?php echo "collapse".$id; ?>">
          <div class="card card-body mobile-menu-card">
          <?php
                foreach($nav_items as $nav_itemTemp){
                  if($nav_itemTemp->menu_item_parent == (string)$nav_item->ID){
          ?>
          <a class="btn btn-outline-uap mobile-menu-button" href="<?php echo $nav_itemTemp->url ?>" role="button">
          <?php echo $nav_itemTemp->title ?>
          </a>
          <?php
                  }
                }
                echo "</div>";
                echo "</div>";
              }
              $id++;
            }
          }
          ?>
      </div>
    </div>
  </div>
