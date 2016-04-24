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
                    <?php dynamic_sidebar('menu-footer'); ?>
                </div>
            </div>
</footer>
</div> 
<?php wp_footer(); ?>

</body>
</html>
