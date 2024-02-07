<!doctype html>
<html lang="en">

<head>
    <title>Examen Ricardo Z</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() ?>/assets/css/styles.css" rel="stylesheet" />
</head>

<body>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" style="background-color: cadetblue; color:#fff;" href="<?php echo base_url() ?>">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Proveedores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Categorias</a>
    </ul>

    <section class="mx-5 mt-5">
        <div class="mb-2 text-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Crear nuevos productos
            </button>
        </div>

        <!-- Modal agregar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar un producto nuevo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>agregar" method="post">
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping">Proveedor</span>
                                <input type="text" class="form-control" name="provedorADD" id="provedorADD">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping">Categoria</span>
                                <input type="text" class="form-control" name="categoriaADD" id="categoriaADD">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping">Producto</span>
                                <input type="text" class="form-control" name="productoADD" id="productoADD">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-primary text-center">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Proveedor</th>
                        <th>Categoría</th>
                        <th>Producto</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $p) : ?>
                        <tr>
                            <td><?php echo $p['PROD_ID'] ?></td>
                            <td><?php echo $p['PROV_NOMBRE'] ?></td>
                            <td><?php echo $p['CAT_NOMBRE'] ?></td>
                            <td><?php echo $p['PROD_NOMBRE'] ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalId" onclick="pasarDatos('<?php echo $p['PROV_NOMBRE'] ?>', '<?php echo $p['PROD_ID'] ?>' )"></button>
                                <a href="<?php echo base_url() ?>eliminar/<?php echo $p['PROD_ID'] ?>" class="btn btn-danger"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- modal -->
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url() ?>actualizar" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Editar Valores
                            </h5>
                            <input type="text" name="idProducto" id="idProducto" style="visibility: hidden;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Proveedor</span>
                                <input type="text" class="form-control" name="provNombre" id="provNombre">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cerrar
                            </button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>