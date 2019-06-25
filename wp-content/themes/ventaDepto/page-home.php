<?php
/*
Template Name: home
*/
 ?>

<?php
  get_header();
 ?>

<div class="row cuerpo-home">
  <div class="col-md-7 contenedor-textos-home">
    <div class="presentacion-home">
      <h1>
        <?php echo the_title(); ?>
      </h1>
      <h2>subtitulo01</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
      </p>
    </div>
  </div>


  <div class="col-md-5 diagramacion-img">

    
    <!-- POST THUMNAIL -->
    <!-- <?php
      // LLamar a los post del apartado Nosotros
      $args = array (
        'post_type'              => array( 'Fotos' ),
        'post_status'            => array( 'publish' ),
        'order'                  => 'ASC',
        'posts_per_page'         => '10',
      );
      // The Query
      $fotos = new WP_Query( $args );
      // The Loop
      if ( $fotos->have_posts() ) {
        while ( $fotos->have_posts() ) {
          $fotos->the_post();

          if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails', array( 'class' => 'img-directores-wp'));}

              }
            } else {
              // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
    ?> -->
  </div>

</div>

<?php
  get_footer();
?>
