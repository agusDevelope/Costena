<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once "dependencias.php"; ?>
</head>
<body>
<?php require_once "componentes/nav.php"; ?>
<div class="container">
<div class="row  mt-5 mb-5">
        <div class="col-md-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        AGREGAR
                        </button>
                    </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                       <div class="container mt-5 mb-5 border border-dark">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <form>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputEmail1" class="bmd-label-floating">ID:</label>
                                <input type="text" class="form-control" id="idProv" id="nameProv">
                                
                            </div>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputPassword1" class="bmd-label-floating">Nombre proveedor:</label>
                                <input type="text" class="form-control" id="nameProv"  name="nanm">
                            </div>
                            <button class="btn btn-default mt-5 mb-5">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-raised bg-secondary mt-5 mb-5">Enviar</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        MODIFICAR
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                       <div class="container mt-5 mb-5 border border-dark">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <form>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputEmail1" class="bmd-label-floating">ID:</label>
                                <input type="text" class="form-control" id="idProv" id="nameProv">
                                
                            </div>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputPassword1" class="bmd-label-floating">Nombre proveedor:</label>
                                <input type="text" class="form-control" id="nameProv"  name="nanm">
                            </div>
                            <button class="btn btn-default mt-5 mb-5">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-raised bg-secondary mt-5 mb-5">Enviar</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ELIMINAR
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                       <div class="container mt-5 mb-5 border border-dark">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <form>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputEmail1" class="bmd-label-floating">ID:</label>
                                <input type="text" class="form-control" id="idProv" id="nameProv">
                                
                            </div>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputPassword1" class="bmd-label-floating">Nombre proveedor:</label>
                                <input type="text" class="form-control" id="nameProv"  name="nanm">
                            </div>
                            <button class="btn btn-default mt-5 mb-5">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-raised bg-secondary mt-5 mb-5">Enviar</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        CONSULTAR
                        </button>
                    </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                       <div class="container mt-5 mb-5 border border-dark">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <form>
                            <div class="form-group mt-5 mb-5">
                                <label for="exampleInputEmail1" class="bmd-label-floating">ID:</label>
                                <input type="text" class="form-control" id="idProv" id="nameProv">
                                
                            </div>
                            <button class="btn btn-default mt-5 mb-5">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-raised bg-secondary mt-5 mb-5">Buscar</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "componentes/footer.php"; ?>
</body>
</html>

