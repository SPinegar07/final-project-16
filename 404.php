<?php 
/* Template: 404 page (Not Found) */

get_header(); ?>

    <div class="row">
        <div class="twelve columns">
          <table class="white" width="100%">
            <tr>
              <td width="235px">
              </td>
                <td>
           <h1>Are you lost?</h1>
            <h2>This is somewhat embarrassing, isn't it?</h2>
            <p>It looks like nothing was found at this location. Try another way!</p>

            <h2>Try searching for what you need:</h2>
            <?php get_search_form(); ?>
        </div>
      </td>
      <td>
        <img src="http://www.kittensunicornsandtacos.com/chips/wp-content/uploads/2016/04/clipbellephillippe.gif" alt="lost" width="400" class="right" />
           </td>
           <td width="235px">
              </td>
         </tr>
       </table>
    </div>
  </div>

<?php get_footer(); ?>