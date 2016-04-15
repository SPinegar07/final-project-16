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
<!-- BEGIN MAIN IMAGE SECTION -->
            <div class="index-main">
                <table>
                    <tr>
                        <td>Menu</td>
                        <td>Locations</td>
                    </tr>
                </table>
            </div>
<!-- END MAIN IMAGE SECTION -->
            <div class="twelve columns">
                <table>
                    <tr>
                        <td>GET TO KNOW US</td>
                        <td>SPECIALS</td>
                        <td>ORDER NOW</td>
                    </tr>
                </table>
        </div>
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