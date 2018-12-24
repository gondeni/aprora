<?php include '../utils/cabecera.html'; ?>

<!-- Promo Block -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
  <!-- Parallax Image -->
  <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-black-opacity-0_3--after" style="height: 110%; background-image: url(../../assets/img/contacto.jpg);"></div>
  <!-- End Parallax Image -->

  <!-- Promo Block Content -->
  <div class="container g-color-white text-center g-py-120">
    <h2 class="h1 g-font-weight-600 text-uppercase mb-2" id="borde_letra">Contacto</h2>
    <!-- <p class="g-font-weight-300 g-font-size-22 text-uppercase" id="borde_letra">Curso de oratoria para profesores</p> -->
  </div>
  <!-- Promo Block Content -->
</section>
<!-- End Promo Block -->


<!-- Contact Form -->
<section class="container g-py-100">
  <div class="row g-mb-20">
    <div class="col-lg-6 g-mb-50">
      <!-- Heading -->
      <h2 class="h1 g-color-black g-font-weight-700 mb-4">¿Cómo podemos ayudarte?</h2>
      <p class="g-font-size-18 mb-0">Los arranques de APRORA nacen inicialmente en la Comunidad Extremeña, y progresivamente como foco asociativo de índole  nacional se extiende  también con sede en Madrid.</p>
      <!-- End Heading -->
    </div>
    <div class="col-lg-6">
      <div class="row g-mb-50">
        <div id="map"></div>
      </div>
      <div class="row g-mb-10">
        <div class="col-lg-5 align-self-end ml-auto">
          <div class="media">
            <div class="d-flex align-self-center">
              <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                <i class="g-font-size-16 icon-communication-033 u-line-icon-pro"></i>
              </span>
            </div>
            <div class="media-body align-self-center">
              <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Teléfono</h3>
              <p class="mb-0">+34 671 226 617</p>
            </div>
          </div>
        </div>

        <div class="col-lg-5 align-self-end ml-auto">
          <div class="media">
            <div class="d-flex align-self-center">
              <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                <i class="g-font-size-16 icon-communication-062 u-line-icon-pro"></i>
              </span>
            </div>
            <div class="media-body align-self-center">
              <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Correo electrónico</h3>
              <p class="mb-0"><a href="mailto:info@aprora.com">info@aprora.com</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="media" style="font-size:2em;">
            <a href="https://www.facebook.com/Aprora-439520733245941/" style="color: #3B5998;" target"_blank"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-12">
      <!-- <form action="../includes/mailer.php" method="post" enctype="text/plain"> -->
      <form enctype="text/plain" method="post" action="mailto:info@aprora.com">
      <!-- <form enctype="text/plain" method="get" action="mailto:gondeni.romero@gmail.com?subject=Email%20Subject&body=Email%20Body%20Text"> -->
        <div class="row">
          <div class="col-md-4 form-group g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">Nombre</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="nombre" type="text" placeholder="" required>
          </div>
          <div class="col-md-4 form-group g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">Correo electrónico</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="correo" type="email" placeholder="" required>
          </div>
          <div class="col-md-4 form-group g-mb-20">
          <label class="g-color-gray-dark-v2 g-font-size-13">Número de teléfono</label>
          <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="telefono" type="tel" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group g-mb-20">
            <div class="g-mb-40">
              <label class="g-color-gray-dark-v2 g-font-size-13">Tu mensaje</label>
              <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" name="mensaje" rows="12" placeholder="Escriba aquí su mensaje ..." required></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group g-mb-20 text-right">
            <input class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35 g-bg-primary" type="submit" value="Enviar">
            <!-- <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35 g-bg-primary" type="submit" role="button">Enviar</button> -->
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Contact Form -->
<!-- <div class="row">
<div class="col-md-6">
<label class="g-color-gray-dark-v2 g-font-size-13">Correo electrónico</label>
<input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="correo" type="email" placeholder="" required>
</div>

<div class="col-md-6">
<label class="g-color-gray-dark-v2 g-font-size-13">Número de teléfono</label>
<input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="telefono" type="tel" placeholder="">
</div>
</div> -->
<?php include '../utils/pie.html'; ?>
