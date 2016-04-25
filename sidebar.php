<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MCJ6213 Template</title>
        <!-- Links to our Style.css file -->
    <!-- Sylesheet -->
        <style type="text/css">
  <?php
    include("style.css");
  ?>
</style>
</head>
<body>
    <div class="sidebar">
<h2 ><?php _e('Categories'); ?></h2>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>
</div>
</body>

</html>