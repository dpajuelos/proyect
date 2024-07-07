<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gastos</title>
    <?php require_once "modules/header.php"?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <?php require_once "modules/navbar.php"?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="col text-center">
                                    <h4 class="card-title">Pago planilla</h4>
                                </div>
                                <form class="forms-sample">
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputUsername2"
                                                placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="monthPicker" class="col-sm-3 col-form-label">Selecciona un
                                            mes:</label>
                                        <div class="col-sm-9">
                                            <input type="month" id="monthPicker" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-success me-2">Generar</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="col text-center">
                                    <h4 class="card-title">Gastos de maquinarias</h4>
                                </div>
                                <form class="forms-sample">
                                    <div class="form-group row">
                                        <label for="exampleSelectGender" class="col-sm-3 col-form-label">Tipo de
                                            gasto</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleSelectGender">
                                                <option>Mantenimiento</option>
                                                <option>Combustible</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2"
                                            class="col-sm-3 col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputUsername2"
                                                placeholder="Descripción">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Costo</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="exampleInputUsername2"
                                                placeholder="S/.">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-success me-2">Guardar</button>
                                        <button class="btn btn-light btn">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Fecha</th>
                                        <th>Mes</th>
                                        <th>Monto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12/12/2023</td>
                                        <td>Diciembre</td>
                                        <td>3200</td>
                                        <td>
                                            <button type="button" class="btn btn-warning me-2 btn-sm">Editar</7button><button
                                                type="button" class="btn btn-danger btn-sm">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>MATRICULA</th>
                                        <th>COSTO</th>
                                        <th>DESCRIPCION</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1234-ABC</td>
                                        <td>1000.0</td>
                                        <td>SE ARREGLO UNA LLANTA REVENTADA</td>
                                        <td><button type="button" class="btn btn-warning me-2 btn-sm">Editar</button><button
                                                type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card mt-5 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="col text-center">
                                    <h4 class="card-title">Pagos tributarios</h4>
                                </div>
                                <form class="forms-sample">
                                    <div class="form-group row">
                                        <label for="monthPicker" class="col-sm-3 col-form-label">Selecciona un
                                            mes:</label>
                                        <div class="col-sm-9">
                                            <input type="month" id="monthPicker" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Costo</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="exampleInputUsername2"
                                                placeholder="S/.">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-success me-2">Guardar</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="table-responsive col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Concepto</th>
                                        <th>Fecha</th>
                                        <th>Costo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Agregado A</td>
                                        <td>18/05/2024</td>
                                        <td>1200</td>
                                        <td><button type="button" class="btn btn-warning me-2 btn-sm">Editar</button><button
                                                type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
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
</body>

</html>