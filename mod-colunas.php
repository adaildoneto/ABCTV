<div class="row">
  <h6 class="wtitle"> Colunistas </h6><hr class="style-one">
</div>
<div class="row">
  <div id="caluna" class="colunas">

    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://calegario.esy.es/wp-content/uploads/2019/04/FB_IMG_1554598089479-150x150.jpg"></div>

    <div class="row"><a href="http://diariodoacre.com.br/category/archibaldo-antunes/"><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Calibre .38</h4></a>
      <h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">Archibaldo Antunes</h6></a>
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'			  		         => array ('15'),
          'posts_per_page'         => 1,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

            echo ('<div class="blue-grey-text text-darken-4 center-align">');

            get_template_part( 'coluna', '' );

            echo ('</div>')  ;
                  wp_reset_postdata();

          }

        ?>

    </div>

    </div>
    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://calegario.esy.es/wp-content/uploads/2019/04/Rodrigo-coluna-150x150.jpg"></div>

    <div class="row"><a href="http://diariodoacre.com.br/category/rodrigo-fernandes/"><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">De tudo um pouco</h4></a>
      <h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">Rodrigo Fernandes</h6></a>
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'			  		         => array ('14'),
          'posts_per_page'         => 1,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

            echo ('<div class="blue-grey-text text-darken-4 center-align">');

            get_template_part( 'coluna', '' );

            echo ('</div>')  ;
                  wp_reset_postdata();

          }

        ?>
    </div>

    </div>
    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://calegario.esy.es/wp-content/uploads/2019/04/Salomão-Coluna-150x150.jpg"></div>
        <div class="row"><a href="http://diariodoacre.com.br/category/lamparina/"><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Lamparina</h4></a>
<h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">Salomão Matos</h6>
<?php

  $myargs = array (
    'pagination'             => false,
    'cat'			  		         => array ('18'),
    'posts_per_page'         => 1,
    'ignore_sticky_posts'    => true,

  );
  // The Query
  $myquery = new WP_Query( $myargs );

  // The Loop
  while ( $myquery->have_posts() ) {

      $myquery->the_post();

      echo ('<div class="blue-grey-text text-darken-4 center-align">');

      get_template_part( 'coluna', '' );

      echo ('</div>')  ;
            wp_reset_postdata();

    }

  ?>

    </div>

    </div>
    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://diariodoacre.com.br/wp-content/uploads/2019/04/WhatsApp-Image-2019-04-11-at-17.37.21-e1555040665973-150x150.jpeg"></div>

    <div class="row"><a href="http://diariodoacre.com.br/category/albert-azenha/"><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Coluna do Azenha</h4></a>
      <h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">por Albert Azenha</h6>
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'			  		         => array ('16'),
          'posts_per_page'         => 1,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

            echo ('<div class="blue-grey-text text-darken-4 center-align">');

            get_template_part( 'coluna', '' );

            echo ('</div>')  ;
                  wp_reset_postdata();

          }

        ?>
    </div>

    </div>
    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://calegario.esy.es/wp-content/uploads/2019/04/FREUD-foto-coluna-150x150.jpeg"></div>

    <div class="row"><a href="http://diariodoacre.com.br/category/freud-antunes/"><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Freud explica</h4></a>
      <h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">Freud Antunes</h6>
      <?php

        $myargs = array (
          'pagination'             => false,
          'cat'			  		         => array ('17'),
          'posts_per_page'         => 1,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

            echo ('<div class="blue-grey-text text-darken-4 center-align">');

            get_template_part( 'coluna', '' );

            echo ('</div>')  ;
                  wp_reset_postdata();

          }

        ?>

    </div>

    </div>


    <div class="colunista">
    <div class="center-align"><img align="center" class="circle  z-depth-1 img-coluna center-align" src="http://diariodoacre.com.br/wp-content/uploads/2019/04/IMG-20190416-WA0039-150x150.jpg"></div>

    <div class="row"><a href=""><h4 class=" news2 blue-grey-text text-darken-4 center-align" style="font-size: 1.2rem; font-weight: 800; padding: 5px;">Na Balada</h4></a>
      <h6 class="blue-grey-text text-darken-4 center-align" style="font-size: 0.8rem; margin-top: -15px;">James Pequeno</h6></a>
    <p class="black-text center-align"> Acompanhe os principais eventos e baladas da cidade. </p>

    </div>

    </div>


  	 <?php if (function_exists ('adinserter')) echo adinserter (5); ?>


</div>
</div>
