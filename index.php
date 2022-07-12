<?php
get_header();
?>
    <?php 
        if (get_theme_mod('macruuf-callout-display') == "block") { 
    ?>
    <div class="home-show">
        <div class="left">
            <h1><?php echo get_theme_mod('macruuf-callout-title') ?></h1>
            <p><?php echo get_theme_mod('macruuf-callout-description') ?></p>
            <div class="btn">
                <a href="<?php echo get_permalink(get_theme_mod('macruuf-callout-link')) ?>">
                    <button class="about-btn"><?php echo get_theme_mod('macruuf-callout-button') ?></button>
                </a>
                <a href="<?php echo get_permalink(get_theme_mod('macruuf-callout-linkTwo')) ?>">
                    <button class="contact-btn"><?php echo get_theme_mod('macruuf-callout-buttonTwo') ?></button>
                </a>
            </div>
        </div>
        <div class="right">
            <?php
                if(wp_get_attachment_url(get_theme_mod('macruuf-callout-image')) == null){
                   
                }else{
            ?>
            <div class="pattern-bg"></div>
            <div class="img-box">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('macruuf-callout-image')) ?>">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
            </div>
          <?php
                }
            ?>
          </div>
    <?php
        }else{

        }
    ?>
    </div>
    <div class="posts-section">
        <div class="post-lits">
            <h3><?php echo get_theme_mod('posts-section-title') ?></h3>
            <?php 
                if(have_posts()) :
                    while(have_posts()) :
                        the_post();
                        ?>
                            <div class="post">
                                <?php
                                    if(get_the_post_thumbnail() == null){
                                      
                                    }else{
                                ?>
                                <div class="img-post">
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>         
                                </div>
                                <?php } ?>
                                <div class="body-post">
                                    <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
                                    <div class="text">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="pots-date">
                                        <?php
                                            if(get_theme_mod('posts-section-view-author') == 'none'){

                                            }else{
                                                ?>
                                                 <span class="admin"><i class="fa-solid fa-user"></i><?php the_author();?></span>
                                                <?php
                                            }
                                                ?>
                                                <span class="date"><i class="fa-solid fa-calendar-days"></i> <?php the_time(get_theme_mod('posts-section-date-type'));?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>
            
        </div>
        <?php
            get_sidebar();
        ?>
    </div>
   
    <?php
get_footer();
?>