<?php
 if(get_theme_mod('sidebar-section-view') == 'none'){
 
}else{
?>
<div class="singular">
<?php
 if(get_theme_mod('sidebar-section-control-one') == 'none'){
 
}else{
?>
            <div class="skills">
                <h3><?php if(get_theme_mod('sidebar-section-title-one') == null){ echo 'skills'; }else{ echo get_theme_mod('sidebar-section-title-one'); }?></h3>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-icon-one') == null){ echo 'fa-solid fa-desktop'; }else{ echo get_theme_mod('sidebar-section-row-icon-one'); } ?>"></i>
                    </div>
                    <div class="text">
                            <?php 
                                if(get_theme_mod('sidebar-section-row-name-one') == null){
                                    echo 'Web Development';
                                }else{
                                    echo get_theme_mod('sidebar-section-row-name-one');
                                }
                            ?>
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-icon-two') == null){ echo 'fa-solid fa-pen-nib'; }else{ echo get_theme_mod('sidebar-section-row-icon-two'); } ?>"></i>
                    </div>
                    <div class="text">
                        <?php 
                            if(get_theme_mod('sidebar-section-row-name-two') == null){
                                echo 'Graphic Design';
                            }else{
                                echo get_theme_mod('sidebar-section-row-name-two');
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-icon-there') == null){ echo 'fa-solid fa-camera'; }else{ echo get_theme_mod('sidebar-section-row-icon-there'); } ?>"></i>
                    </div>
                    <div class="text">
                        <?php 
                            if(get_theme_mod('sidebar-section-row-name-there') == null){
                                echo 'Video Editor';
                            }else{
                                echo get_theme_mod('sidebar-section-row-name-there');
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php }
                 if(get_theme_mod('sidebar-section-control-two') == 'none'){

                 }else{
            ?>
            <div class="programmers">
                <h3><?php if(get_theme_mod('sidebar-section-title-two') == null){ echo 'programmer language'; }else{ echo get_theme_mod('sidebar-section-title-two'); } ?></h3>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-two-icon-one') == null){ echo 'fa-brands fa-html5'; }else{ echo get_theme_mod('sidebar-section-row-two-icon-one'); } ?>"></i>
                    </div>
                    <div class="text">
                        <?php 
                            if(get_theme_mod('sidebar-section-row-two-name-one') == null){
                                echo 'Html And Css';
                            }else{
                                echo get_theme_mod('sidebar-section-row-two-name-one');
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-two-icon-two') == null){ echo 'fa-brands fa-js'; }else{ echo get_theme_mod('sidebar-section-row-two-icon-two'); } ?>"></i>
                    </div>
                    <div class="text">
                        <?php
                            if(get_theme_mod('sidebar-section-row-two-name-two') == null){
                                echo 'Javascript';
                            }else{
                                echo get_theme_mod('sidebar-section-row-two-name-two');
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="<?php if(get_theme_mod('sidebar-section-row-two-icon-there') == null){ echo 'fa-brands fa-php'; }else{ echo get_theme_mod('sidebar-section-row-two-icon-there'); } ?>"></i>
                    </div>
                    <div class="text">
                        <?php 
                            if(get_theme_mod('sidebar-section-row-two-name-there') == null){
                                echo 'Php And Mysqli';
                            }else{
                                echo get_theme_mod('sidebar-section-row-two-name-there');
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="Social">
                <h3>Social Media</h3>
                <div class="sMedia">
                    <?php
                        if(get_theme_mod('sidebar-section-view-fb') == 'none'){

                        }else{
                    ?>
                    <a href="<?php if(get_theme_mod('sidebar-section-fb-url') == null){ echo 'https://www.facebook.com/'; }else{ echo get_theme_mod('sidebar-section-fb-url'); } ?>">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <?php
                        }
                        if(get_theme_mod('sidebar-section-view-in') == 'none'){

                        }else{
                    ?>
                    <a href='<?php if(get_theme_mod('sidebar-section-in-url') == null){ echo 'https://www.instagram.com/'; }else{ echo get_theme_mod('sidebar-section-in-url'); } ?>'>
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <?php
                        }
                        if(get_theme_mod('sidebar-section-view-tw') == 'none'){

                        }else{
                    ?>
                    <a href="<?php if(get_theme_mod('sidebar-section-te-url') == null){ echo 'https://www.twitter.com/'; }else{ echo get_theme_mod('sidebar-section-te-url'); } ?>">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <?php
                        }
                        if(get_theme_mod('sidebar-section-view-gb') == 'none'){

                        }else{
                    ?>
                    <a href="<?php if(get_theme_mod('sidebar-section-gb-url') == null){ echo 'https://www.github.com/'; }else{ echo get_theme_mod('sidebar-section-gb-url'); } ?>">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <?php
                        }
                        if(get_theme_mod('sidebar-section-view-tk') == 'none'){

                        }else{
                    ?>
                    <a href="<?php if(get_theme_mod('sidebar-section-tk-url') == null){ echo 'https://www.tiktok.com/'; }else{ echo get_theme_mod('sidebar-section-tk-url'); } ?>">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php
}
?>