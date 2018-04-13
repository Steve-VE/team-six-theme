<?php 
    /**
     * Template Name: Home
     */

    // Récupération du numéro de page(cf. pagination)
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    get_header();
?>
<main>
    <?php if( $paged <= 1 ): ?>
    <section class="home">
    <?php
        $postnum=1;
        $args = array( 
            'numberposts' => 5, 
            'order'=> 'DESC', 
            'orderby' => 'title' 
        );
        $postslist = get_posts( $args );

        foreach ($postslist as $post) :  
            setup_postdata($post);
            
            // Premier article...
            if($postnum == 1): $postnum++; ?>
                <div class="main_article post">
                    <div class="image-container">
                        <a href="<?php echo get_permalink($post)?>" title="<?php the_title(); ?>" >
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                            } ?>
                        </a>
                    </div>

                    <div class="category">
                        <?php the_category(' '); ?>
                    </div>

                    <h2>
                        <a href="<?php echo get_permalink($post)?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
        
                </div>
                <div class="secondary_articles">
                <?php
                // Articles secondaires...
            else: ?>
                    <div class="post">
                        <div class="image-container">
                            <a href="<?php echo get_permalink($post)?>" title="<?php the_title(); ?>" >
                                <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
                            </a>
                        </div>
                            
                        <h3>
                            <a href="<?php echo get_permalink($post)?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </div>
                <?php
            endif;
        endforeach; ?>
    </div>
    </section>
    <?php endif;?>

    <div class="col-right">
        <!-- Sidebar ici !!! -->
        <?php get_sidebar(); ?>
    </div>

    <div class="col-left">
        <?php if( $paged <= 1 ): ?>
        <section class="featured">
                <div class="section-title">
                    <h2>Featured posts</h2>
                </div>
                
                <?php
                $args = array( 
                    'numberposts' => 3, 
                    'category' => '7',
                    'order'=> 'ASC', 
                    'orderby' => 'date'
                );
                $postslist = get_posts( $args );
                
                foreach ($postslist as $post) :  
                    setup_postdata($post); ?>
                    
                    <div class="post">
                        <div class="image-container">
                            <a href="<?php echo get_permalink($post)?>" title="<?php the_title(); ?>" >
                                    <?php if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    } ?>
                            </a>
                        </div>
                        
                        <div class="content">
                            <div class="category"><?php the_category(' '); ?></div>
                            
                            <h3 class="title">
                                <a href="<?php echo get_permalink($post)?>">
                                        <?php the_title(); ?>
                                </a>
                            </h3>
                            
                            <p>
                                <a href="<?php echo get_permalink($post)?>" title="<?php the_title(); ?>" >
                                <?php 
                                $text = get_the_excerpt($post);
                                $text = wp_trim_words( $text, 22, "..." ); 
                                echo $text;
                                ?>
                                </a>
                            </p>
                            <?php 
                                // $link = 'https://www.facebook.com/sharer/sharer.php?u='. get_permalink($post);
                                // echo "href=\"$link\"";
                                // echo "onclick=&quot;window.open(this.href, \'facebook-share\',\'width=580,height=296\');return false;&quot;"
                            ?>
                            <!-- <a href="" class="share"><i class="fa fa-share"></i> share</a> -->
                            <?php 
                            // echo gk_social_buttons("share", true, true, true); 
                            the_share_button();
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
        </section>
        <?php endif; ?>
    
        <section id="latest-post" class="latest">
                <?php if( $paged <= 1 ): ?>
                    <div class="section-title">
                        <h2>Lastest posts</h2>
                    </div>
                <?php
                endif;
                
                $args = array( 
                    'numberposts' => 8,
                    'order'=> 'DESC', 
                    'orderby' => 'date',
                    'paged' => $paged
                );
                $postslist = get_posts( $args );
                
                foreach ($postslist as $post) :  
                    setup_postdata($post); ?>
                    
                    <div class="post">
                        <div class="image-container">
                            <a href="<?php echo get_permalink($post)?>" title="<?php the_title(); ?>" >
                                    <?php if(has_post_thumbnail()){
                                        the_post_thumbnail();
                                    } ?>
                            </a>
                        </div>
                        
                        <div class="category"><?php the_category(' '); ?></div>
                        
                        <a href="<?php echo get_permalink($post)?>">
                            <?php the_title('<h3>', '</h3>'); ?>
                            
                            <p>
                                <?php 
                                $text = get_the_excerpt($post);
                                $text = wp_trim_words( $text, 22, "..." ); 
                                echo $text;
                                ?>
                            </p>
                        </a>
                        
                    </div>
                <?php endforeach; ?>
                <hr>
                <?php wp_numeric_pagination( "pagination" ); ?>
        </section>

    </div>
    
</main>
<?php 
    get_footer();
//
// ================================== Version - 0.1.3 ========================================
// ======= Starting - 26/03/18 =========================== Ending - 11/04/18 =================
// ====================================== Author : ===========================================
//
//  MMP""MM""YMM `7MM"""YMM        db      `7MMM.     ,MMF'      .M"""bgd `7MMF'`YMM'   `MP' 
//  P'   MM   `7   MM    `7       ;MM:       MMMb    dPMM       ,MI    "Y   MM    VMb.  ,P   
//       MM        MM   d        ,V^MM.      M YM   ,M MM       `MMb.       MM     `MM.M'    
//       MM        MMmmMM       ,M  `MM      M  Mb  M' MM         `YMMNq.   MM       MMb     
//       MM        MM   Y  ,    AbmmmqMA     M  YM.P'  MM mmmmm .     `MM   MM     ,M'`Mb.   
//       MM        MM     ,M   A'     VML    M  `YM'   MM       Mb     dM   MM    ,P   `MM.  
//     .JMML.    .JMMmmmmMMM .AMA.   .AMMA..JML. `'  .JMML.     P"Ybmmd"  .JMML..MM:.  .:MMa.
?>