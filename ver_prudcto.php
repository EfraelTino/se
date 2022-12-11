<?php
include "config/conexion.php";
$id_producto = $_GET['id'];
function buscarProductoById($conexion, $id)
{
    $sql = "SELECT * FROM productos WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
$busc_producto = buscarProductoById($conexion, $id_producto);
$res_b_producto = mysqli_fetch_array($busc_producto);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="assets/css/estilo.css" rel="stylesheet" />
    <link href="assets/css/cards.css" rel="stylesheet" />
    <link href="assets/css/prueba.css" rel="stylesheet" />
    <link href="assets/css/mano.css" rel="stylesheet" />
</head>

<body>
    <div class=" me">
        <nav class="navbar container navbar-expand-lg navbar-light navbar-header w-100  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="assets/icon/principal.svg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Inicio</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul> -->
                    <ul class="navbar-nav"><a href="index.php" class="nav-link text-black hover-overlay font-weight-light" category="all">Inicio</a></ul>
                    <ul class="navbar-nav"><a href="productos.php" class="nav-link text-black hover-overlay font-weight-light" category="all">Productos</a></ul>
                    <ul class="navbar-nav"><a href="nosotros.php" class="nav-link text-black hover-overlay font-weight-light" category="all">Nosotros</a></ul>

                </div>
                <a href="#" class="btn-flotante py-1" id="btnCarrito"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg> <span class="m-0 carrito" id="carrito">0</span></a>
            </div>
        </nav>
    </div>
    <div style="margin-top: 100px;" class="border-dark">
        <div class="container mb-3">
            <div class=" text-center mt-5  ">
                <div class="">
                    <h1>Detalles del producto</h1>
                </div>
                <div class="row-cols-1 row-cols-sm-2  row-cols-md-2">
                    <div class="col">
                        <img src="assets/img/<?php echo $res_b_producto['imagen']; ?>" alt="<?php echo $res_b_producto['nombre'] ?>" />
                    </div>
                    <div class="col">
                        <div class="card-header">
                            <h2> <?php echo $res_b_producto['nombre'] ?> </h2>
                        </div>
                        <div class="text-center list-group-item">
                            <p>Descripción: <strong><?php echo $res_b_producto['descripcion'] ?></strong></p>
                        </div>
                        <div class="text-center list-group-item">
                            <p>Precio por oferta: <?php echo $res_b_producto['precio_normal'] ?> <strong><?php echo $res_b_producto['precio_rebajado'] ?></strong></p>
                        </div>
                        <div class="text-center list-group-item">
                            <p>Cantidad: <strong><?php echo $res_b_producto['cantidad'] ?></strong></p>
                        </div>
                        <div class="text-center list-group-item">

                            <?php
                            function buscarCategoriaById($conexion, $id)
                            {
                                $sql = "SELECT * FROM categorias WHERE id='$id'";
                                return mysqli_query($conexion, $sql);
                            }
                            $b_cat = buscarCategoriaById($conexion, $res_b_producto['id_categoria']);
                            $res_b_cat = mysqli_fetch_array($b_cat);
                            ?>
                            <p>Categoría: <strong><?php echo $res_b_cat['categoria'] ?></strong></p>
                        </div>
                        <div class="text-center list-group-item"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar al carrito</a></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/scripts.js"></script>

</html>