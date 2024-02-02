<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estilo.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <nav class="nav justify-content-start ">
        <a class="nav-link" href="<?php base_url() ?>/repaso/productos">Productos</a>
    </nav>

    <section class="m-5 text-center">
        <h3 class="mb-5">Esta es la tabla de productos</h3>
        <div class="table-responsive">
            <table class="table table-warning">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Proveedor</th>
                        <th>Categoria</th>
                        <th>Producto</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    <?php foreach ($productos as $prod) : ?>
                        <tr>
                            <th><?php echo $prod['PROD_ID']; ?></th>
                            <th><?php echo $prod['PROV_NOMBRE']; ?></th>
                            <th><?php echo $prod['CAT_NOMBRE']; ?></th>
                            <th><?php echo $prod['PROD_NOMBRE']; ?></th>
                            <th>
                                <a href="<?php echo base_url() ?>editar/<?php echo $prod['PROD_ID']; ?>" class="btn btn-primary">
                                    Editar
                                </a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>