<footer class="footer mt-5">
  <div class="container">
        
    <nav class="row">
      <div class="col-12 col-md-4 col-lg">
        <h4 class="mb-3">freelance</h4>
        <?php
           wp_nav_menu( array(
            'container'=>false,
            'item_wrap'=> '<ul>%3$s</ul>',
            'theme_location'    => 'footer_frel',
           ));
        ?>
      </div>

      <div class="col-12 col-md-4 col-lg">
        <h4 class="mb-3">sem</h4>
        <?php
           wp_nav_menu( array(
            'container'=>false,
            'item_wrap'=> '<ul>%3$s</ul>',
            'theme_location'    => 'footer_sem',
           ));
        ?>
      </div>

      <div class="col-12 col-md-4 col-lg">
        <h4 class="mb-3">social ads</h4>
        <?php
           wp_nav_menu( array(
            'container'=>false,
            'item_wrap'=> '<ul>%3$s</ul>',
            'theme_location'    => 'footer_social',
           ));
        ?>
      </div>
    </nav>

    <hr>
    <div class="row">
      <div class="col-12 col-md-6 logo">
        
         <?php 

            if( has_custom_logo() ):   
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $custom_logo_url = $custom_logo_data[0];
          ?>

          <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" 
              title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
              rel="home"
              class="navbar-brand" >

            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                 class="d-lg-block"/>
          </a>
          <?php else: ?>
            <div class="site-name"><?php bloginfo( 'name' ); ?></div>
          <?php endif; ?>
      </div>
  
      <div class="col-12 col-md-6 iconos-rs d-flex justify-content-md-end align-items-center">
        <a href=""><i class="fa fa-facebook-square"></i></a>
        <a href=""><i class="fa fa-youtube"></i></a>
        <a href=""><i class="fa fa-instagram"></i></a>
      </div>
    </div>



  </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url')?>/js/my_script.js"></script>
    <?php wp_footer() ?>
</body>
</html> 

</body>
</html>
