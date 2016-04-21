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
                        <td class="button1">Menu</td>
                        <td class="button2">Locations</td>
                    </tr>
                </table>
            </div>
<!-- END MAIN IMAGE SECTION -->
            <div class="twelve columns">
                <div class="four columns">
                    <?php dynamic_sidebar('main-page-left-widget'); ?>
                </div>
                <div class="four columns">
                    <?php dynamic_sidebar('main-page-center-widget'); ?>
                </div>
                <div class="four columns">
                    <?php dynamic_sidebar('main-page-right-widget'); ?>
                </div>
        <div class="twelve columns">
<!-- BEGIN LOOP -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, We could not find what you were looking for.'); ?></p><?php endif; ?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>
</body>
</html>