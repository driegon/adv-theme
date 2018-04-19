<?php get_header(); ?>
<body topmargin="0" bgcolor="#ebebeb">
  <div id="header" class="full-container">
      <div class="barra-top" id="inicio"></div>
        <div id="subMenu">
          <div class="logogrey"><img src="<?php echo get_template_directory_uri() . '/images/logosmall.jpg'; ?>"></div>
                <div class="menugrey">
                    <ul class="menu" id="nav">
                      <li><a href="<?php echo get_site_url() . '#inicio'; ?>">INICIO</a></li>
                      <li><a href="<?php echo get_site_url() . '#nosotros'; ?>">NOSOTROS</a></li>
                      <li><a href="<?php echo get_site_url() . '#terapias'; ?>">TERAPIAS</a></li>
                      <li><a href="<?php echo get_site_url() . '#equipo'; ?>">EQUIPO</a></li>
                      <li><a href="<?php echo get_site_url() . '#contacto'; ?>">CONTACTO</a></li>
                    </ul>
                    <div class="underline"></div>
                </div>
        </div>
        <div class="barra-menu">
          <div class="logo"><img src="<?php echo get_template_directory_uri() . '/images/logo.jpg'; ?>"></div>
          <div class="navegacion">
                <nav>
                    <ul class="menu" id="nav">
                      <li><a href="<?php echo get_site_url() . '#inicio'; ?>">INICIO</a></li>
                      <li><a href="<?php echo get_site_url() . '#nosotros'; ?>">NOSOTROS</a></li>
                      <li><a href="<?php echo get_site_url() . '#terapias'; ?>">TERAPIAS</a></li>
                      <li><a href="<?php echo get_site_url() . '#equipo'; ?>">EQUIPO</a></li>
                      <li><a href="<?php echo get_site_url() . '#contacto'; ?>">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="nosotros" class="container_pag">
          <div class="img-seccion"><?php the_post_thumbnail(); ?></div>
          <div class="txt-seccion txt-seccion-pag">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
              <?php endwhile; else : ?>
                    <article>
                      <p>Sorry, no page was found!</p>
                    </article>
              <?php endif; ?>  
            </div>
          
        </div>
    </div>

<?php get_footer(); ?>