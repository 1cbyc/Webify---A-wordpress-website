<div class="grid_6 alpha">
    <div class="footer_widget first">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('About Us','traffica');?></h4>
            <p><?php _e('We are the fastest emerging websites related to news and every detail about college/ universities.

Our material is in detail and very descriptive manner.','traffica');?></p>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h4><?php _e('OUR PAGES','traffica');?></h4>
            <ul>
                <li><a href="http://localhost/wordpress/index.php/features/accreditions/"><?php _e('Accreditions ','traffica');?></a></li>
                <li><a href="http://localhost/wordpress/index.php/features/academics/"><?php _e('Academics ','traffica');?></a></li>
                <li><a href="http://localhost/wordpress/index.php/features/infrastructure/"><?php _e('Infrastructure ','traffica');?></a></li>
            </ul>
        <?php endif; ?> 
    </div>
</div>
<div class="grid_6">
    <div class="footer_widget">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Use of Webify','traffica');?></h4>
            <p><?php _e('You can easily learn about how your college is gonna look like and get all details of the college at a single place.','traffica');?></p>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6 omega">
    <div class="footer_widget last">
        <?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
            <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Search Anything','traffica'); ?></h4>
            <p><?php _e('Search Anything Which You Desire.','traffica'); ?></p>
            <?php get_search_form(); ?>         
        <?php endif; ?>
    </div>
</div>