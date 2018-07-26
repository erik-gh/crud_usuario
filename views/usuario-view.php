<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CRUD-PHP-PDO-MVC</title>

        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
        <!-- DataTable CSS File -->
        <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
         <!--<link rel="stylesheet" type="text/css" href="../public/css/datatables.min.css">--> 

        <!-- Jquery JS File -->
        <script type="text/javascript" src="../public/js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap JS File -->
        <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
        <!-- DataTable JS File -->
        <script type="text/javascript" src="../public/datatables/jquery.dataTables.min.js"></script>
        <!-- Custom JS FIle -->
        <script type="text/javascript" src="../scripts/usuario-script.js"></script>
    </head>
    <body>
        <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> CRUD USUARIO - MVC - PHP - PDO  - DATATABLE </h1>
                </div>
                    
            </div>
            <div class="row">
                    <div class="pull-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#modalUser">Modal Usuario</button>
                    </div>
            </div>
            <div class="row">
                <h3> Registros : </h3>
                <div class="panel-body" id="listadoRegistros">
                    <!--<table id="tblListado" class="table table-striped table-condensed table-bordered table-hover">-->
                    <table id="tblListado" class="table table-hover">
                        <thead>
                        <th>#</th>
                        <th>Firts Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Content Section -->

        <!-- Bootstrap Modal -->

        <!-- Modal Nuevo Usuario -->
        <div class="modal fade" id="modalUser" tabindex="-1" role="dialog">
            <div class="modal-dialog" role=document>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal Usuario</h4>
                    </div>
                    <form name="form_user" id="form_user">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="hiddenUserId" name="hiddenUserId">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarForm()">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="btnSave">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Modal Nuevo Usuario -->
    </body>
</html>