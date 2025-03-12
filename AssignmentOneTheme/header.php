<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!-- Add JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha384-JqT3SQfawRcv/BIHPThkBvs0OEVtFmqPFf/LVI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RszYM9MOdWRnTeT87bh950GNyZPhcTHXJ1NW7RuBC5yN/o1JpcVBQyq46cDFL"
            crossorigin="anonymous"></script>

    <!-- Add our custom CSS file -->
    <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/AssignmentOneTheme/style.css' )); ?>">

    <!-- Add custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<header>
    <div>
        <a href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo esc_url( home_url( 'wp-content/themes/AssignmentOneTheme/screenshot.png' )); ?>" alt="header logo">
        </a>
    </div>
    <nav>
        <?php
        wp_nav_menu( array(
            'menu'           => 'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false,
        ));
        ?>
    </nav>
</header>

</body>
</html>