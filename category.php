<?php
get_header();
?>
<div class="category-info">
    <h3><?php single_cat_title();?></h3>    
    <div class="span"></div>
    <div class="cat-row">
        <?php
            if(have_posts()) :
                while(have_posts()) :
                    the_post();
        ?>
        <div class="cat-box">
            <div class="cat-img">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            
            <div class="cat-info">
                <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
                <div class="text-post">
                    <?php the_content(); ?>
                </div>
                <div class="cat-date-admin">
                <?php
                    if(get_theme_mod('posts-section-view-author') == 'none'){

                    }else{
                ?>
                    <samp class="admin"><i class="fa-solid fa-user"></i></i><?php the_author();?></samp>
                <?php } ?>
                    <samp class="date"><i class="fa-solid fa-calendar-days"></i><?php the_time(get_theme_mod('posts-section-date-type'));?></samp>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
</div>
<?php
get_footer();
?>