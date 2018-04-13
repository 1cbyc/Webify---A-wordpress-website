<div class="footer-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <div class="footer">
                    <?php
                    /* A sidebar in the footer? Yep. You can can customize
                     * your footer with four columns of widgets.
                     */
                    get_sidebar('footer');
                    ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer-line-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer-line">
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bottom-footer-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom_footer_content">        
                <div class="grid_24 ">        
                    <div class="bottom-inner-footer">
                    <div class="copyrightinfo">
                            <div class="copyrightinfo">
                                <?php if (traffica_get_option('traffica_footertext') != '') { ?>
                                    <p class="copyright"><?php echo traffica_get_option('traffica_footertext'); ?></p> 
                                <?php } else { ?>
                                    <p class="copyright"><a href="<?php echo esc_url('https://www.inkthemes.com/market/yoga-studio-wordpress-theme/'); ?>" rel="nofollow"><?php _e('My Website Webify','traffica');?></a> <?php _e('Powered By ','traffica');?><a href="<?php echo esc_url('http://www.wordpress.org'); ?>"><?php _e(' WordPress','traffica');?></a></p>                                     
                                <?php } ?>
                            </div>
                        </div>
                     </div>
                     <ul class="social_logos">

<?php if (traffica_get_option('inkthemes_facebook') != '') { ?>
                            <li class="facebook"><a href="<?php echo esc_url(traffica_get_option('inkthemes_facebook')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_twitter') != '') { ?>
                            <li class="twitter"><a href="<?php echo esc_url(traffica_get_option('inkthemes_twitter')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_google') != '') { ?>
                            <li class="google"><a href="<?php echo esc_url(traffica_get_option('inkthemes_google')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

  <?php if (traffica_get_option('inkthemes_rss') != '') { ?>
                            <li class="rss"><a href="<?php echo esc_url(traffica_get_option('inkthemes_rss')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_pinterest') != '') { ?>
                            <li class="pinterest"><a href="<?php echo esc_url(traffica_get_option('inkthemes_pinterest')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_linked') != '') { ?>
                            <li class="linkedin"><a href="<?php echo esc_url(traffica_get_option('inkthemes_linked')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                             <?php if (traffica_get_option('inkthemes_instagram') != '') { ?>
                            <li class="instagram"><a href="<?php echo esc_url(traffica_get_option('inkthemes_instagram')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_youtube') != '') { ?>
                            <li class="youtube"><a href="<?php echo esc_url(traffica_get_option('inkthemes_youtube')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>


                        <?php if (traffica_get_option('inkthemes_tumblr') != '') { ?>
                            <li class="tumblr"><a href="<?php echo esc_url(traffica_get_option('inkthemes_tumblr')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>

                        <?php if (traffica_get_option('inkthemes_flickr') != '') { ?>
                            <li class="flickr"><a href="<?php echo esc_url(traffica_get_option('inkthemes_flickr')); ?>"><span></span></a></li>
                            <?php
                        } else {
                            
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
