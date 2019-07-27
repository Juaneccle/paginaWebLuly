<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row justify-content-md-center">
      <div class="col-md-8 imagen-single">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array( 'class' => 'img-single'));}
         ?>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-8 texto-single">
        <?php the_content();?>
        <div class="contenedor-detalles">
          <p class="detalle"> <?php echo get_the_date();?></p>
          <?php the_category(","); ?>
          <p class="detalle"> <?php the_author(); ?></p>
        </div>
      </div>
    </div>
      <?php endwhile; endif; ?>
  </div>

    <div class="postWrapper" id="post-<?php the_ID(); ?>">

      <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <?php echo get_avatar( $comment, 32 ); ?>
      <small><?php the_date(); ?> by <?php the_author(); ?></small>

      <div class="post"><?php the_content(__('(more...)')); ?></div>
      <p class="postMeta">Category: <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . edit_post_link(__('Edit'), ''); ?></p>

      <hr class="noCss" />

    </div>

	<?php

  comments_template();

  endwhile; else: ?>

	

<?php
  endif;

  get_footer();

?>
