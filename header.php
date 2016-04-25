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
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="two columns">
                    <div class="right">

                        <table width="160">
                            <tr>
                                <td>
                                    <a href="https://www.facebook.com/"><img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Facebook-1.png" onmouseover="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Facebook.png'" onmouseout="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Facebook-1.png'" /></a>
                                </td>
                                <td>
                                    <a href="https://twitter.com/"><img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Twitter-1.png" onmouseover="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Twitter.png'" onmouseout="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Twitter-1.png'" /></a>
                                </td>
                                <td>
                                    <a href="https://www.pinterest.com/"><img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Pinterest-1.png" onmouseover="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Pinterest.png'" onmouseout="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/Pinterest-1.png'" /></a>
                                </td>
                                <td>
                                    <a href="https://www.youtube.com/"><img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/YouTube-1.png" onmouseover="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/YouTube.png'" onmouseout="this.src='http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/YouTube-1.png'" /></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
                <div class="twelve columns">
                <div class="six columns">
                    <!-- ADD LINK TO HOME_URL -->
                    <a href="http://www.kittensunicornsandtacos.com/chips"><img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/chip-logo.png" alt="logo" width="300px"></a>
                </div>
            </div>
                <div class="six columns">
                    <div class="right">
        <?php wp_nav_menu(array(
            'sort_column' => 'menu_order', 
            'container_class' => 'blank-menu-header'
            ));?>
    </div>
</div>      
</div>
</div>
</div>
</div>
</body>

</html>