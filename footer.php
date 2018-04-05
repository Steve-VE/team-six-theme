<footer>
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


            <div class="col-md-4">
                <h3>Popular Posts</h3>

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
</footer>
<?php wp_footer(); ?> <!-- Wordpress doc dit de placer ça juste avant le </body> -->
</body>


</html>