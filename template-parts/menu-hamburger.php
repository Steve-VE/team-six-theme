<?php

/**
 * Template Name: menu-hamburger
 */
?>
<?php add_thickbox(); ?>

<div id="menuToggle">
  <input type="checkbox" />
  <span></span>
  <span></span>
  <span></span>
  
  <ul id="menu">
      <?php wp_list_categories(array(
        'title_li' => '',
        'orderby' => 'id',
        'include' => array(3, 4, 5, 6),
        'hide_empty' => false
      )); ?>
  </ul>
</div>
