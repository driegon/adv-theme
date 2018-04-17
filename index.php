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
        <div id="slide" class="slider"></div>
        <div id="nosotros" class="nosotros">
          <div class="img-seccion"><img src="<?php echo get_template_directory_uri() . '/images/nosotros.jpg'; ?>"></div>
            <div class="txt-seccion">
            <h1>NOSOTROS</h1>
            <p>Somos una empresa de servicio, especializados en el cuidado respiratorio en casa, contamos con más de 15 años de experiencia, nos preocupamos por el bienestar integral del paciente con énfasis en su salud respiratoria.<br>
            <br>
Ofrecemos el servicio de renta y venta de equipo y accesorios para el cuidado del paciente en casa, con énfasis en el cuidado respiratorio. Ofrecemos más que un producto el servicio y la asesoría que lleve al paciente y su familia a encontrar el apoyo que necesita para recuperar su salud y la ayuda que se requiere en los momentos de crisis y angustia, cuando el paciente debe de ser atendido de manera integral en el seno de su hogar.</p>
            </div>
        </div>
        <div class="terapias_container">
          <div class="terapias" id="terapias">
            <div class="terapias_titular">TERAPIAS</div>
              <div class="container-terapias">

                <div class="container-terapias_left">
                  <div class="container-terapia-abajo-left">
                      <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/oxigenoterapia-2/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/oxigenoterapia.jpg'; ?>"></a></div>
                      <div class="titulo-terapia"><a href="<?php get_site_url() . '/index.php/oxigenoterapia-2/'; ?>">OXIGENOTERAPIA</a></div>
                  </div>
                  <div class="container-terapia-abajo-right">
                      <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/aerosolterapia-2/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/aerosolterapia.jpg'; ?>"></a></div>
                      <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/aerosolterapia-2/'; ?>">AEROSOLTERAPIA</a></div>
                  </div>
                </div>

                <div class="container-terapias_right">
                  <div class="container-terapia-abajo-left">
                    <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/cuidados-de-la-via-aerea/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/cuidados_viaaerea.jpg'; ?>"></a></div>
                    <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/cuidados-de-la-via-aerea/'; ?>">CUIDADOS DE LA VÍA AÉREA</a></div>
                  </div>
                  <div class="container-terapia-abajo-right">
                    <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/terapia-fisica-del-torax/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/terapia_deltorax.jpg'; ?>"></a></div>
                    <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/terapia-fisica-del-torax/'; ?>">TERAPIA FÍSICA<br>DEL TÓRAX</a></div>
                  </div>
                </div>

              </div>
          </div>
          <div class="terapias" id="productos">
              <div class="terapias_titular">PRODUCTOS</div>
              <div class="container-terapias">

                <div class="container-terapias_left">
                      <div class="container-terapia-abajo-left">
                          <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/concentrador-de-oxigeno/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/concentrador.jpg'; ?>"></a></div>
                          <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/concentrador-de-oxigeno/'; ?>">CONCENTRADOR DE OXÍGENO</a></div>
                      </div>
                      <div class="container-terapia-abajo-right">
                          <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/ejercicios-respiratorios/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/ejercicios_respiratorios.jpg'; ?>"></a></div>
                          <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/ejercicios-respiratorios/'; ?>">EJERCICIOS<br>RESPIRATORIOS</a></div>
                      </div>
                </div>
                <div class="container-terapias_right">
                      <div class="container-terapia-abajo-left">
                          <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/ippb-o-rppi/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/ipb.jpg'; ?>"></a></div>
                          <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/ippb-o-rppi/'; ?>">IPPB o RPPI</a></div>
                      </div>
                      <div class="container-terapia-abajo-right">
                          <div class="thumbs-terapias"><a href="<?php echo get_site_url() . '/index.php/aspiracion-de-secreciones-flemas/'; ?>"><img src="<?php echo get_template_directory_uri() . '/images/aspiracion.jpg'; ?>"></a></div>
                          <div class="titulo-terapia"><a href="<?php echo get_site_url() . '/index.php/aspiracion-de-secreciones-flemas/'; ?>">ASPIRACIÓN<br>DE SECRECIONES (FLEMAS)</a></div>
                      </div>
                </div>

              </div>
          </div>
        </div>
        <div id="equipo" class="equipo">
          <div class="img-seccion-left"><img src="<?php echo get_template_directory_uri() . '/images/equipo.jpg'; ?>"></div>
            <div class="txt-seccion-left">
            <h1>NUESTRO EQUIPO</h1>
            <p>Contamos con productos de alta calidad y precios muy competitivos, pero sobre todo, disponemos de un grupo de personas deseosas de apoyarle y servirle de la mejor manera.<br>
            <br>
No somos infalibles, por eso disponemos del apoyo y asesoría de otros grupos de especialistas y empresas que están dispuestos a colaborar con usted y su familia en la recuperación de la salud.</p>
            </div>
        </div>
        <div class="contacto-container" id="contacto">
          <div class="terapias_titular">CONTACTO</div>
          <div class="separator"><img src="<?php echo get_template_directory_uri() . '/images/separator.jpg'; ?>"></div>
            <div class="contacto-left">
              <div class="cont-contacto-phone">
                  <div class="info-contacto-left">
                        <p class="titular-seccion-contacto">TELEFONOS</p>
                        <div class="telefono-contain">
                        <div class="telefono"><p class="textos-seccion-contacto">5527-4676</p></div>
                          <div class="wa"><img src="<?php echo get_template_directory_uri() . '/images/wa.png'; ?>"></div>
                        </div>
                        <div class="telefono-contain">
                        <div class="telefono"><p class="textos-seccion-contacto">5205-9635</p></div>
                        <div class="wa"><img src="<?php echo get_template_directory_uri() . '/images/wa.png'; ?>"></div>
                        </div>
                    </div>
          <div class="info-contacto-celular">
                      <img src="<?php echo get_template_directory_uri() . '/images/celular.png'; ?>">
                    </div>                   
                </div>
              <div class="cont-contacto-dir">
                  <div class="info-contacto-left">
                        <p class="titular-seccion-contacto">DIRECCION</p>
                        <p class="textos-seccion-contacto">10a. Avenida 3-30</p>
                        <p class="textos-seccion-contacto">Colonia Quinta Samayoa Z.7</p>
                        <p class="textos-seccion-contacto">Centro Comercial Promocentro</p>
                    </div>
          <div class="info-contacto-pin">
                      <img src="<?php echo get_template_directory_uri() . '/images/pin.png'; ?>">
                    </div>                   
                </div>
              <div class="cont-contacto-mail">
                  <div class="info-contacto-left">
                        <p class="titular-seccion-contacto">EMAIL</p>
                        <p class="textos-seccion-contacto">info@alientodevida.com.gt</p>
                        <p class="textos-seccion-contacto">luis.raul.coronado@gmail.com</p>
                    </div>
          <div class="info-contacto-sobre">
                      <img src="<?php echo get_template_directory_uri() . '/images/mail.png'; ?>">
                    </div>                   
                </div>
              <div class="cont-contacto-dir">
                  <div class="info-contacto-left">
                        <p class="titular-seccion-contacto">FACEBOOK</p>
                        <p class="textos-seccion-contacto"><a href="https://es-la.facebook.com/AlientodeVidaGuatemala/">Aliento de Vida Guatemala</a></p>
                    </div>
          <div class="info-contacto-sobre">
                      <img src="<?php echo get_template_directory_uri() . '/images/facebook.png'; ?>">
                    </div>                   
                </div>
            </div>
            <div class="contacto-right">
            <form action="http://alientodevida.com.gt/form.php" method="post" name="contacto">
                <div class="margin">
                  <div class="inputGroup">      
                    <input type="text" required="">
                    <span class="inputBar"></span>
                    <label>Nombre</label>
                  </div>
                  <div class="inputGroup">      
                    <input type="text" required="">
                    <span class="inputBar"></span>
                    <label>Correo</label>
                  </div>
                  <div class="inputGroup">      
                    <input type="text" required="">
                    <span class="inputBar"></span>
                    <label>Teléfono</label>
                  </div>
                  <div class="inputGroup">      
                    <textarea type="textarea" required=""></textarea>
                    <span class="inputBar"></span>
                    <label>Mensaje</label>
                  </div>
                  <button>Enviar</button>
                </div>
            </form>
            </div>
        </div>
      <div class="barra-top"></div>
    </div>
<?php get_footer(); ?>