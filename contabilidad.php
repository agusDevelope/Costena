<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
<?php require_once "componentes/nav.php"; ?>
          
          
          
        <div class="container mt-5 mb-5">
<h1 class="text-center mt-5 mb-5 ">Módulo de Contabilidad</h1>
    <div class="row">
        <div class="col-md-4 ">
            <div class="card text-center" style="width: 23rem;">
            <img class="card-img-top" src="images/clients.png" alt="Card image cap">
                <div class="card-body bg-secondary text-dark">
                    <a href="http://localhost/costena/clientes.php" class="btn btn-primary btn-raised btn-block bg-primary">CLIENTES</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card text-center bg-secondary text-dark" style="width: 23rem;">
            <img class="card-img-top" src="images/caja.png" alt="Card image cap">
                <div class="card-body bg-secondary text-dark">
                    <a href="http://localhost/costena/distribuidores.php" class="btn btn-primary btn-raised btn-block bg-primary">BANCOS</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card text-center" style="width: 23rem;">
            <img class="card-img-top" src="images/sellss.jpg" alt="Card image cap">
                <div class="card-body bg-secondary text-dark" style="background-color:#ffc400;">
                    <a href="http://localhost/costena/productoAlm.php" class="btn btn-primary btn-raised btn-block bg-primary">VENTAS</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>