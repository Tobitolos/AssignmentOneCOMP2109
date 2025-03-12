<footer>
    <section class="top-footer">
        <div class="first widget-area">
            <a href="<?php echo esc_url( home_url() ); ?>">
            </a>
            <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
        </div>
        <!-- First Widget Area -->

        <div class="second widget-area">
            <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
        </div>
        <!-- Second Widget Area -->

        <div class="third widget-area">
            <?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
        </div>
        <!-- Third Widget Area -->

        <div class="fourth widget-area">
            <?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
        </div>
        <!-- Fourth Widget Area -->
    </section>

    <section class="bottom-footer">
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </nav>
        <p>&copy; <?php echo date( 'Y' ); ?> My Learning, Projects, and Goals</p>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>
