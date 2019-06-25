<?php

  /**
  *@desc A page. See single.php is for a blog post layout.
  */

  get_header();?>
    <?php

  if (have_posts()) : while (have_posts()) : the_post();
  ?>
  

  <?php
  comments_template();?>

  
  <?php

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;?>


     
 <?php get_footer();
?>