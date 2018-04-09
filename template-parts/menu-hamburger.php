<?php

/**
 * Template Name: menu-hamburger
 */
?>
<nav role="navigation">
<div class="container-responsive">
  <div id="menuToggle">
    <input type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    <h2 class="title">FooDog</h2>
    <ul id="menu">
        <?php wp_list_categories(array(
          'title_li' => '',
          'orderby' => 'id',
          'include' => array(3, 4, 5, 6),
          'hide_empty' => false
        )); ?>
    </ul>
</div>
</div>
</nav>