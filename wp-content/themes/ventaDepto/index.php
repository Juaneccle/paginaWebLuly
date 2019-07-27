<?php

  get_header();?>

  <?php

  if (have_posts()): ?>

<?php

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <div class="col-md-4 image-blog">
      <a href="<?php the_permalink(); ?>"><?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array( 'class' => 'img-directores-wp'));}?>
      </a>
    </div>
    <div class="col-md-8 cuerpo-blog">
      <a href="<?php the_permalink(); ?>"> <h2 class="sub-titulo-blog"><?php the_title(); ?></h2></a>
      <?php the_excerpt();?>
      <div class="contenedor-detalles">
        <p class="detalle"> <?php echo get_the_date();?></p>
        <?php the_category(","); ?>
        <p class="detalle"> <?php the_author(); ?></p>
      </div>
    </div>
  </div>
  
<?php endwhile; endif; ?>

  </ol>

<?php else: ?>



<?php

  endif;
  ?>



 <?php get_footer();
?>
