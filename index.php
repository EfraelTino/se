<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="assets/css/estilo.css" rel="stylesheet" />
    <link href="assets/css/cards.css" rel="stylesheet" />
    <link href="assets/css/prueba.css" rel="stylesheet" />
    <link href="assets/css/mano.css" rel="stylesheet" />

</head>

<body>

    <!-- Navigation-->
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


    <section class="py-1">
        <?php
        include "slide.php";
        include "descuento.php";
        include "card.php";

        ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto ver" href="ver_prudcto.php?id=<?php echo $data['id']; ?>">Ver producto</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>

        </div>
        <?php
        include "intro.php";
        include "mayot.php";
        include "mano.php";
        ?>
    </section>
    <!-- Footer-->
    <?php include "footer.php" ?>
    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; mi primera puntada 2022</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>