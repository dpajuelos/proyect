<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuarios </title>
    <!-- plugins:css -->
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
                                    <a href="#" class="btn btn-otline-dark align-items-center"><i
                                            class="icon-share"></i> Compartir</a>
                                    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Imprimir</a>
                                    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                                        Exportar</a>
                                </div>
                                <div class="col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ingreso de datos</h4>
                                            <p class="card-description"> Usuarios </p>
                                            <form class="forms-sample">
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2"
                                                        class="col-sm-3 col-form-label">Usuario</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="exampleInputUsername2" placeholder="User">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputEmail2"
                                                        class="col-sm-3 col-form-label">Contraseña</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"
                                                            id="exampleInputUsername2" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleSelectGender"
                                                        class="col-sm-3 col-form-label">Privilegio</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="exampleSelectGender">
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center mt-3">
                                                    <button type="submit" class="btn btn-success me-2">Subir</button>
                                                    <button class="btn btn-light">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Privilegio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GustavoRH</td>
                                            <td>Admin</td>
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