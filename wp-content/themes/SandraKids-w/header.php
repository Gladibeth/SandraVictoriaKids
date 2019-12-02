 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sandra Victoria</title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" rel="shortcut icon">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<body>
	<?php if(wp_is_mobile()){ ?>
	<div class="content_ws">
    <div style="width: 50px;height: 50px;">
		<a href="https://wa.me/56942161015">
			<img style="width:100%;height:100%;" class="logo-ws" src="https://sandravictoria.cl/wp-content/uploads/2019/11/whatsapp.png">
		</a>
      
    </div>
  </div>

	
	<?php } ?>
	
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="nav-top__header">
        <div class="container">
          <div class="nav-top__content d-flex pl-1 pr-1 justify-content-between">
            <div class="main-nav__contact">
            
              <a href="mailto:contactokids@sandravictoria.cl">
                  <i class="fa fa-envelope"></i>
                  <span>contactokids@sandravictoria.cl</span>
                </a>
            </div>
            <!-- <div class="main-nav__redes">
              <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="#">
              <img id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/SandraVictoriaKids-logo.png">
            </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link active" href="#Home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" href="#Services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" href="#About">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" href="#Installations">Instalaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" href="#Contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="line-nav">
    </nav>
  </header>