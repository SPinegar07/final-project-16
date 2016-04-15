<!DOCTYPE html>
<html>
<head>
<title>Chip's Chiptastic Cupcakery</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
</head>
<body>
     <div class="container">
            <?php get_header(); ?>
    <section class="row">
        <div class="twelve columns">
<!-- BEGIN LOOP -->
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                } // end while
            } // end if
            ?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>
</body>
</html>