<?php
    require_once("../../config/conexion.php");
    require_once("../../models/Rol.php");
    $rol = new Rol();
    $datos = $rol->validar_acceso_rol($_SESSION["USU_ID"],"mntcategoria");
    if(isset($_SESSION["USU_ID"])){
        if(is_array($datos) and count($datos)>0){
?>


<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>
    <title>InvNet | Ayuda</title>
    <?php require_once("../html/head.php"); ?>
</head>

<body>

    <div id="layout-wrapper">

        <?php require_once("../html/header.php"); ?>

        <?php require_once("../html/menu.php"); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Ayuda</h4>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- TODO: Tabla con informacion de ayuda -->
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Descripcion</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Acceso</td>
                                                <td>Como acceder al Sistema</td>
                                                <td><a href="../../assets/help/Acceso.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Categoria</td>
                                                <td>Dar mantenimiento a los registro de la tabla categoria</td>
                                                <td><a href="../../assets/help/Categoria.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Producto</td>
                                                <td>Dar mantenimiento a los registro de la tabla producto</td>
                                                <td><a href="../../assets/help/Producto.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Usuario</td>
                                                <td>Dar mantenimiento a los registro de la tabla Usuario</td>
                                                <td><a href="../../assets/help/Usuario.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Compras</td>
                                                <td>Generacion de Compra en el sistema</td>
                                                <td><a href="../../assets/help/Compras.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Listado de Compras</td>
                                                <td>Ver listado completo de todas las compras</td>
                                                <td><a href="../../assets/help/ListadoCompras.pdf" target="_blank" class="link-success">Ver <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php require_once("../html/footer.php"); ?>
        </div>

    </div>

    <?php require_once("../html/js.php"); ?>
</body>

</html>
<?php
        }else{
            header("Location:".Conectar::ruta()."view/404/");
        }
    }else{
        header("Location:".Conectar::ruta()."view/404/");
    }
?>