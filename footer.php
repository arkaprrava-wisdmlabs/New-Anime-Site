<?php
wp_footer();
?>
        </div>
        <footer>
            <div class="company">
                <figure class="logo">
                    <img src="<?php echo site_icon_url(); ?>" alt="logo">
                </figure>
                <h1 class="company-name"><?php echo bloginfo('name'); ?></h1>
            </div>
            <div class="search-field">
                <?php get_search_form(); ?>
            </div>
        </footer>
    </body>
</html>
    