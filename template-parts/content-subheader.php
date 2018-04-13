<?php
/**
 * Template Name: subheader
 */
?>
<nav class="navbar" role="navigation">
    <?php get_template_part('template-parts/menu', 'hamburger'); ?>
    <h1 class="title">
        <a id="home" href="<?php echo get_home_url(); ?>">
            <?php bloginfo('title'); ?>
        </a>
    </h1>
    <div id="my-content-id" style="display:none;">
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
            <label>
                <span class="screen-reader-text"></span>
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>"
                    name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
            </label>
            <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
        </form>
    </div>
    <a href="#TB_inline?width=600&amp;height=300&amp;inlineId=my-content-id" class="thickbox">
        <i class="fa fa-search"></i>
    </a>
</nav>