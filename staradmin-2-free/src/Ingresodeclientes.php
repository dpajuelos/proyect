<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clientes</title>
  <?php require_once "modules/header.php"?>
</head>
  <body class="with-welcome-text">
    <div class="container-scroller">
    <?php require_once "modules/navbar.php"?>
              <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                    <div>
                                      <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Compartir</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Imprimir</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Exportar</a>
                                      </div>
                                      <div class="col-md-6 grid-margin stretch-card">
                                        <div class="card">
                                          <div class="card-body">
                                            <h4 class="card-title">Ingreso de datos</h4>
                                            <p class="card-description"> Clientes </p>
                                            <form class="forms-sample">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Tipo de Cliente</label>
                                                  <div class="col-sm-4">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Natural </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-5">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Jurídica </label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Nombre">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Apellidos</label>
                                                <div class="col-sm-9">
                                                  <input type="Apellidos" class="form-control" id="exampleInputUsername2" placeholder="Apellidos">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">DNI</label>
                                                <div class="col-sm-9">
                                                  <input type="number" class="form-control" id="exampleInputMobile" placeholder="DNI">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Dirección</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Direccion">
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Teléfono</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Teléfono">
                                                </div>
                                              </div>
                                              
                                              <div class="form-group row">
                                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">RUC</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="RUC">
                                                </div>
                                              </div>
                                              <button type="submit" class="btn btn-primary me-2">Subir</button>
                                              <button class="btn btn-light">Cancel</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="table-responsive">
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>NOMBRES</th>
                                            <th>APELLIDOS</th>
                                            <th>DNI</th>
                                            <th>DIRECCION</th>
                                            <th>TELEFONO</th>
                                            <th>TIPO DE CLIENTE</th>
                                            <th>RUC</th>
                                            <th>ACCIONES</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Gustavo</td>
                                            <td>Rojo Huapaya</td>
                                            <td>7777777</td>
                                            <td>Yungay</td>
                                            <td>999999999</td>
                                            <td>Natural</td>
                                            <td>No tiene</td>
                                            <td><button type="button" class="btn btn-warning">Editar</button><button type="button" class="btn btn-danger">Eliminar</button></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Todos los Derechos Reservados.</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<?php require_once "modules/scripts.php"?>
  </body>
</html>