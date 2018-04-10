<?php
/**
 * Template Name: menu-hamburger
 */
?>
<?php add_thickbox(); ?>
<nav role="navigation">
  <div class="container-responsive">
    <div id="menuToggle">
      <input type="checkbox" />
      
      <span></span>
      <span></span>
      <span></span>
      <h1 class="title"><?php bloginfo( 'title' ) ?></h1>
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
  <div id="my-content-id" style="display:none;">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
      <label>
      <span class="screen-reader-text"></span>
      <input type="search" class="search-field"
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      </label>
      <input type="submit" class="search-submit"
      value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </form>
  </div>
  <a href="#TB_inline?width=600&height=300&inlineId=my-content-id" class="thickbox">Search</a>
</nav>