<div class="container-responsive">
    <div class="row">
        <div class="col-md-4">
            <h3>Categories</h3>
            <aside class="categories">
                <?php wp_list_categories(array(
                        'title_li' => '',
                        'orderby'    => 'id',
                        'include' => array( 2, 3, 4, 5, 6 ),
                        'hide_empty' => false
                    )); ?>
            </aside>
        </div>

        <div class="popular col-md-4">
            <h3>Popular Posts</h3>
            <?php
            $popular_posts_args = array(
            'posts_per_page' => 3,
            'meta_key' => 'my_post_viewed',
            'orderby' => 'meta_value_num',
            'order'=> 'DESC'
            );
            
            $popular_posts_loop = new WP_Query( $popular_posts_args );

            while( $popular_posts_loop->have_posts() ) :
                $popular_posts_loop->the_post();
                the_post_thumbnail('thumbnail', ['class' => 'popular-thumbnail']);
                the_title_attribute();
            endwhile;
            wp_reset_query();
            ?>
        </div>


        <div class="col-md-4">
            <aside class="Instagram">
                <h3>Instagram</h3>
            </aside>
        </div>
    </div>

    <div class="container-responsive-2">
        <?php wp_nav_menu(array(
            'menu' => 'mainheader_social_menu',
            'menu_class' => 'social-link'
        )); ?>
    </div>

    <div id="button-scroll-up" onclick="scrollUp();">
        <i class="fa fa-caret-up fa-2x"></i>
    </div>