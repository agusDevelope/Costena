<!DOCTYPE html>
<html>
<title>Contabilidad</title>
<head>
  <?php require_once "dependencias.php"; ?>

</head>
<body>
<?php require_once "componentes/nav.php"; ?>
<?php require_once "componentes/sidebar.php"; ?>
	<div class="container">
		<br>
		<h1>Registro de clientes</h1>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div id="tablastores"></div>
			</div>
		</div>
	</div>


  <!--************************************************* agregar datosmodal ***********************************************-->
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo juego</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmAgrega">
        		<label>Nombre</label>
        		<input type="text" class="form-control form-control-sm" name="nombrej" id="nombrej">
        		<label>Año</label>
        		<input type="text" class="form-control form-control-sm" name="anioj" id="anioj">
        		<label>Empresa</label>
        		<input type="text" class="form-control form-control-sm" name="empresaj" id="empresaj">
        	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary bg-primary" id="btnAgregarJuego">Agregar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* agregar datosmodal ***********************************************-->


  <!--************************************************* updatemodal ***********************************************-->
  <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Actualiza Juego</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmactualiza">
            <input type="text" hidden="" name="id_juego" id="id_juego">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-sm" name="nombrejU" id="nombrejU">
            <label>Año</label>
            <input type="text" class="form-control form-control-sm" name="aniojU" id="aniojU">
            <label>Empresa</label>
            <input type="text" class="form-control form-control-sm" name="empresajU" id="empresajU">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-warning" id="btnactualizar">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* updatemodal ***********************************************-->
  <!-- <script src="funciones.js"></script> -->
</body>
</html>





