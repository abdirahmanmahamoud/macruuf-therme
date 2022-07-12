<?php
get_header();
?>
<?php
 while(have_posts()) :
    the_post();
 ?>
   <div class="boyd-post">
        <div class="page-post">
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <div class="pots-date">
            <?php 
                if(get_theme_mod('posts-section-view-author') == 'none'){

                }else{    
                ?>
                <span class="admin"><i class="fa-solid fa-user"></i><?php  the_author();?></span>
                <?php
                    }
                ?>
                <span class="date"><i class="fa-solid fa-calendar-days"></i><?php the_time(get_theme_mod('posts-section-date-type'));?></span>
            </div>
            <div class="post-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php 
        endwhile;
    ?>
<?php
get_footer();
?>