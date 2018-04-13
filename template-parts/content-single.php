<section class="single-content">
    <?php
    if(have_posts()){
        while (have_posts()){
            the_post();?>
        <div class="single-category-container">
            <?php 
            $postCat = get_the_category();
            foreach ($postCat as $cat) {
                echo '<span class="single-category">' . $cat->name . '</span>';
            }
            ?>
        </div>

        <div class="post">
            <h2>
                <?php  the_title(); ?>
            </h2>

            <?php 
            //Paramètres wordpress pour l'affichage de la  photo
            $post_thumbnail_param = array (
                'class' => "img-fluid", //image responsive - Bootstrap
                'alt'   => get_the_title(),
                'title' => get_the_title()
            );
            the_post_thumbnail('large', $post_thumbnail_param); ?>
            <div class="author-bar">

                <div class="orange-circle">
                    <p>
                        <?php bloginfo('title'); ?>
                    </p>
                </div>

                <p class="post-author">
                    <span class="by">by :</span>
                    <?php
                    $author = get_the_author_meta('ID');
                    echo get_avatar($author, $size = "48");
                    the_author_posts_link(); 
                    ?>
                </p>
                <a href="#respond">
                    <button class="comment-button">
                        <i class="fa fa-comment"></i>Comment
                    </button>
                </a>

            </div>
        </div>

        <div class="content">
            <?php 
            echo the_content(); 
            ?>
        </div>
        <aside class="newletter">
            <h5>Subscribe to The FooDog Newletter</h5>
            <h6>Get health and wellness tips about your dog delivered to your inbox.</h6>
            <input type="text" name="newletter_register_mail" placeholder="Your email">
            <a href="#">
                <button type="submit" value="newletter_register_submit">Sign up</button>
            </a>
        </aside>
        <nav class="previous row">
            <div class="previous-left col">
                <p>
                    < Previous article</p>
            </div>
            <div class="previous-right col"></div>
        </nav>
        <aside class="about row">
            <div class="col-sm-3">
                <div class="medium-orange-circle">
                    <p>
                        <?php bloginfo('title'); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-7">
                <p>FooDog is the leading direct-to-consumer, fresh pet food company, offering customers and their pets the highest
                    quality and conveience without retail markups. All human-grade meal plans are made to order, designed
                    by veterinarians, and personalized to provide the ideal nutritional balance for every dog. Get started
                    today at</p>
                <p>
                    <a href="<?php echo get_home_url(); ?>#">https://www.foodog.com/</a>
                </p>
            </div>
        </aside>
        <div class="post-comments">
            <?php comments_template(); ?>
        </div>

        <?php
        }
    }
    ?>
</section>