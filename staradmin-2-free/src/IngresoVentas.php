<!DOCTYPE html>
<html lang="en">
 <?php require_once "modules/header.php"?>
  <body class="with-welcome-text">
    <div class="container-scroller">
    <?php require_once "modules/navbar.php"?>
              <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                      <div class="col-6 grid-margin stretch-card m-auto">
                        <div class="card">
                          <div class="card-body">
                            <div class="col text-center">
                              <h4 class="card-title">Ingresos de Ventas</h4>
                            </div>
                            <p class="card-description">Ventas</p>
                            <form class="forms-sample">                                                        
                              <div class="col-md-6>
                                <div class="form-group row">
                                  <div class="col-sm-12">
                                    <label for="exampleInputName1">Cliente</label>
                                    <input type="text" class="form-control mt-3" id="exampleInputName1" placeholder="Cliente">
                                  </div>                                
                                  <label class="col-sm-3 col-form-label">Tipo</label>
                                  <div class="col-sm-4">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Natural </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Jurídica </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleInputEmail3">Trabajador</label>
                                    <input type="text" class="form-control mt-3" id="" placeholder="Trabajador">
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleInputPassword4">Precio Total</label>
                                    <input type="text" class="form-control mt-3" id="exampleInputPassword4" placeholder="Precio Total">
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleSelectGender">Agregado</label>
                                    <select class="form-select mt-3" id="exampleSelectGender">
                                      <option>1</option>
                                      <option>2</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleInputPassword4">Cantidad Comprada</label>
                                    <input type="number" class="form-control mt-3" id="exampleInputPassword4" placeholder="Cantidad Comprada">
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleSelectGender">Unidad</label>
                                    <select class="form-select mt-3" id="exampleSelectGender">
                                      <option>1</option>
                                      <option>2</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label class="exa mb-3">Tipo de Comprobante</label>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios1" value="" checked> Boleta </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios2" value="option2"> Factura </label>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 col-form-label">
                                    <label for="exampleTextarea1">Descripcion</label>
                                    <textarea class="form-control mt-3" id="exampleTextarea1" rows="4"></textarea>
                                  </div>
                                  <div class="col-sm-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary w-50 mx-2">Generar Comprobante</button>
                                    <button class="btn btn-light w-50 mx-2">Cancelar Venta</button>
                                  </div>
                                </div>                                                                                                                                                    
                            </form>
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
<?php require_once "modules/scripts.php"?>
</html>