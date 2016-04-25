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
                    <div class="white">
                    <table>
                        <tr>
                            <td width="75%">
                <div class="nine columns">
                    <?php if (have_posts()) :               
                        while (have_posts()) : the_post(); 
                        if ( has_post_thumbnail() ) { ?>
                            <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                        <?php } ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();
                        endwhile;
                    endif; ?>
                </div>
            </td><td width="25%">
                <div class="three columns">
                        <?php get_sidebar(); ?>
                    </div>
                </td>
            </tr>
        </table>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
</div>
</body>

</html>