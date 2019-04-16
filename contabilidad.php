<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
<?php require_once "componentes/nav.php"; ?>

<section class="content-section mt-5 mb-5" id="galeria">
        <div class="container-fluid">
          
          
          
          <div class="row no-gutters popup-gallery">     
            <div class="col-lg-4 col-sm-6">
              <a class="galeria-box"  href="http://localhost/costena/clientes.php">
                <img class="img-fluid justify-content-center btn btn-primary" src="imagenes_portal/juridico.jpg" alt="" width="300px" height="300px">
                <div class="galeria-box-caption">
                  <div class="galeria-box-caption-content">
                    <div class="project-category text-faded">
                        GERENCIA GENERAL
                    </div>
                    <!-- <div class="project-name">
                      Avanzado
                    </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="galeria-box" href="http://localhost/portalCap/ggeneral.php">
                <img class="img-fluid" src="imagenes_portal/cj.png" alt="">
                <div class="galeria-box-caption">
                  <div class="galeria-box-caption-content">
                    <div class="project-category text-faded">
                       GERENCIA DE PRESTACIONES
                    </div>
                    <!-- <div class="project-name">
                      Básico
                    </div> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a class="galeria-box" href="http://localhost/portalCap/ggeneral.php">
                <img class="img-fluid" src="imagenes_portal/cj.png" alt="">
                <div class="galeria-box-caption">
                  <div class="galeria-box-caption-content">
                    <div class="project-category text-faded">
                        FINANZAS E INFORMÁTICA
                    </div>
                    <!-- <div class="project-name">
                      Avanzado
                    </div> -->
                  </div>
                </div>
              </a>
            </div>
      </section>


    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>