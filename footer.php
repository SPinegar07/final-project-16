<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MCJ6213 Template</title>
	<!-- Links to our Style.css file -->
    <style type="text/css">
  <?php
    include("style.css");
  ?>
  </style>
</head>
<body>
	<footer>
		<div class="twelve columns">
                <div class="four columns">
                    <?php dynamic_sidebar('footer-widget-one'); ?>
                </div>
                <div class="eight columns">
                    <?wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu_class' ) ); ?>

                </div>
            </div>
</footer>
</div> 
<?php wp_footer(); ?>

</body>
</html>
