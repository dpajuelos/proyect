<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ventas</title>
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
                                    <h4 class="card-title">Ingresos de Ventas</h4>
                                </div>
                                <p class="card-description">Ventas</p>
                                <form class="forms-sample">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="exampleInputName1"
                                                class="col-sm-3 col-form-label">Cliente</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    placeholder="Cliente">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tipo</label>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios1" value=""
                                                            checked> Natural </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios2"
                                                            value="option2"> Jurídica </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail3"
                                                class="col-sm-3 col-form-label">Cliente</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    placeholder="Cliente">
                                            </div>
                                        </div>
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
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Cantidad
                                                Comprada</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="exampleInputPassword4"
                                                    placeholder="Cantidad Comprada">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword4" class="col-sm-3 col-form-label">Precio
                                                Total</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputPassword4"
                                                    placeholder="Precio Total">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectGender"
                                                class="col-sm-3 col-form-label">Unidad</label>
                                            <div class="col-sm-9">
                                                <select class="form-select mt" id="exampleSelectGender">
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tipo de Comprobante</label>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios1" id="membershipRadios1" value=""
                                                            checked> Boleta </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios1" id="membershipRadios2"
                                                            value="option2"> Factura </label>
                                                </div>
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
                                            <button type="submit" class="btn btn-success mx-2">Generar
                                                Comprobante</button>
                                            <button class="btn btn-light mx-2">Cancelar Venta</button>
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
                                        <th>Cliente</th>
                                        <th>Fecha</th>
                                        <th>Agregado</th>
                                        <th>Cantidad</th>
                                        <th>Monto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gus</td>
                                        <td>21/03/2024</td>
                                        <td>Agregado 1</td>
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