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

    <div class="contenedor-detalles">
    <?php
      // LLamar a los post del apartado Nosotros
      $args = array (
        'post_type'              => array( 'Detalles' ),
        'post_status'            => array( 'publish' ),
        'order'                  => 'ASC',
        'posts_per_page'         => '5',
      );
      // The Query
      $detalle = new WP_Query( $args );
      // The Loop
      if ( $detalle->have_posts() ) {
        while ( $detalle->have_posts() ) {
          $detalle->the_post();?>


            <div class="detalle1">
              <h1> <?php echo the_title(); ?> </h1>
              <?php echo the_excerpt(); ?>
            </div>
          <?php
              }
            } else {
              // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
    ?>
    </div>

  </div>





  <div class="col-md-5 diagramacion-img">
    <div class="columna-1-fotos">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto15.png">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto02.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto03.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto01.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto04.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto06.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto13.jpg">
    </div>
    <div class="columna-2-fotos">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto07.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto08.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto09.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto10.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto11.jpg">
      <img  src="<?php echo get_template_directory_uri();?>/assets/img/foto12.jpg">
    </div>

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
