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
                <div class="twelve columns">
                <div class="four columns">
                
                <table>
                    <tr>
                        <td><?php dynamic_sidebar('main-button-left'); ?></td>
                        <td><?php dynamic_sidebar('main-button-right'); ?></td>
                    </tr>
                </table> 
            </div>
        </div>
    </section>
<!-- END MAIN IMAGE SECTION -->
<section class="row">
            <div class="twelve columns">
                <table width="100%">
                    <tr>
                        <td width="33%">
                    <?php dynamic_sidebar('main-page-left-widget'); ?>
                        </td>
                        <td width="33%">
                    <?php dynamic_sidebar('main-page-center-widget'); ?>
                </td>
                       <td width="33%">
                    <?php dynamic_sidebar('main-page-right-widget'); ?>
                </td>
            </tr>
        </table>
            </div>
        <div class="twelve columns">
            <div class="post-home">
<!-- BEGIN LOOP -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('ERROR! Could not compute! Our 1s and 0s are broken, search for something else!'); ?></p><?php endif; ?>
</div>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>
</body>
</html>