<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregados</title>
    <?php require_once "modules/header.php"?>
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        v <?php require_once "modules/navbar.php"?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="col text-center">
                                    <h4 class="card-title">Ingresos de agregados</h4>
                                </div>
                                <p class="card-description">Ventas</p>
                                <form class="forms-sample">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="exampleSelectGender"
                                                class="col-sm-3 col-form-label">Agregado</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="exampleSelectGender">
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Unidades</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputPassword4"
                                                    placeholder="Unidades">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Cantidad</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="exampleInputPassword4"
                                                    placeholder="Cantidad de agregado">
                                            </div>
                                        </div>                                       
                                        <div class="form-group row">
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Precio unitatio</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputPassword4"
                                                    placeholder="S/.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Precio Total</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputPassword4"
                                                    placeholder="S/.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleTextarea1"
                                                class="col-sm-3 col-form-label">Descripcion</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleTextarea1"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success mx-2">Guardar</button>
                                            <button class="btn btn-light mx-2">Cancelar</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="table-responsive col-sm-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Agregado</th>
                                    <th>Fecha</th>   
                                    <th>Cantidad</th>
                                    <th>Monto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Agregado 1</td>
                                    <td>21/03/2024</td>
                                    <td>13 cubos</td>
                                    <td>S/.3200</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm me-2">Editar</button><button
                                            type="button" class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
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
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Todos los Derechos
                Reservados.</span>
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