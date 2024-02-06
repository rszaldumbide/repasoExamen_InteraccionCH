<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <ul class="nav justify-content-start  ">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>">Productos</a>
            </li>
        </ul>
    </header>

    <main>
        <section class="m-5">
            <h3 class="text-center">Datos de los productos</h3>
            <div class="table-responsive mx-5 mb-5">
                <table class="table table-primary text-center">
                    <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody class="pl-5">
                        <?php foreach ($productos as $p) : ?>
                            <tr class="pl-5">
                                <th><?php echo $p['PROV_NOMBRE'] ?></th>
                                <th><?php echo $p['CAT_NOMBRE'] ?></th>
                                <th><?php echo $p['PROD_NOMBRE'] ?></th>
                                <th><!-- <a href="<?php echo base_url('editar/') ?>" class="btn btn-primary">Editar</a> -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId" onclick="pasarValoresModal('<?php echo $p['PROV_NOMBRE'] ?>',' <?php echo $p['PROD_ID'] ?>' )">
                                        Editar
                                    </button>
                                </th>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Modal Body -->
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url() ?>actualizar" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Editar Valores <input type="text" style="visibility: hidden" name="ediID" id="ediID" />
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-text">Proveedor:</span>
                                <input type="text" name="editProv" id="editProv" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script>
        function pasarValoresModal(provedor, id) {
            document.getElementById('editProv').value = provedor;
            document.getElementById('ediID').value = id;
        }
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>