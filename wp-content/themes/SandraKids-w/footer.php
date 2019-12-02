<footer class="main-footer" id="Contact">
    <div class="container">
      <div class="main-general__info">
        <div class="main-general__title main-general__title--center">
          <p>Contáctanos</p>
        </div>
      </div>
    <div class="row">
    <div class="col-md-6 cent">

      <ul class="victoriados">
        <li >Sandra Victoria Kids</li>
        <li class="ml-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
 Sexta avenida 1530, San miguel  .</li>
        <li class="ml-2"><a href="mailto:contactokids@sandravictoria.cl"><i class="fa fa-envelope-open" aria-hidden="true"></i>
        contactokids@sandravictoria.cl</a></li>
        <li class="ml-2"><a href="tel:+569 73146812"><i class="fa fa-phone" aria-hidden="true"></i>
+569 7314 6812</a></li>
      </ul>
      <ul class="victoriados">
        <li >Horario</li>
        <li class="ml-2"><i class="fa fa-clock-o" aria-hidden="true"></i>
        De Lunes viernes de 7:00 a 19:00</li>
      </ul>

      <ul class="victoriados">
        <li >Programa Educativo</li>
        <li class="ml-2"><i class="fa fa-check" aria-hidden="true"></i>
        Sala cuna Mayor de hasta 3 años</li>
        <li class="ml-2"><i class="fa fa-check" aria-hidden="true"></i>
        Medio Menor de 2 a 3 años</li>
        <li class="ml-2"><i class="fa fa-check" aria-hidden="true"></i>
        Medio Mayor hasta 4,5 años</li>
      </ul>
    </div>

    <div class="col-md-6">
    <div class="main-footer__content">
        <div class="main-footer__form">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div></div>
    
    
    </div>
    </div>
    <div class="main-footer__copy">
      <p>
        <a href="http://cmarketing.cl/">
            Contact Marketing 
          </a> Todos los derechos Reservados
      </p>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>