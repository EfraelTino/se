<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nostros</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="assets/css/estilo.css" rel="stylesheet" />
    <link href="assets/css/cards.css" rel="stylesheet" />
    <link href="assets/css/prueba.css" rel="stylesheet" />
    <link href="assets/css/mano.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "./config/conexion.php";
    
    ?>
    <div class=" me">
        <nav class="navbar container navbar-expand-lg navbar-light navbar-header w-100 ">
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
                    <ul class="navbar-nav"><a href="index.php" class="nav-link text-black" category="all">Inicio</a></ul>
                    <ul class="navbar-nav"><a href="productos.php" class="nav-link text-black" category="all">Productos</a></ul>
                    <ul class="navbar-nav"><a href="nosotros.php" class="nav-link text-black" category="all">Nosotros</a></ul>
                    
                </div>
                <a href="#" class="btn-flotante py-1" id="btnCarrito"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg> <span class="m-0 carrito" id="carrito">0</span></a>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="col pt-5">
            <h2 class="text-center text-decoration-underline fw-bolder ">¿Quiénes somos?</h2>
            <p class="" style="text-align: justify;">Somos una marca de Alpaca que nació en Arequipa y nuestro compromiso es ayudar a más mujeres peruanas integrándolas en nuestra cadena de suministro como brillantes artesanas poseedoras de antiguos conocimientos textiles.</p>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 ">
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">Mi primera puntada</h3>
                <p class="text-justify" style="text-align: justify;">En Mi primera puntada estamos comprometidos con la producción responsable, presevar el legador cultural y generar una vida sustentable a las comunidades con las que trabajamos.</p>

            </div>
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">CEO de Mi primera puntada</h3>
                <p class="text-justify" style="text-align: justify;">Efrael Junior, CEO de Mi primera puntada, dio el primer paso para el emprendimiento de la venta de ropa de lana con la finalidad de brindar calidad a nuestros clientes.</p>

            </div>
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">Huanta - Perú</h3>
                <p class="text-justify" style="text-align: justify;">Huanta la bella Esmeralda de los Andes, es una provincia importante en crianza de llamas y obejas para extraer lana para nuestra producción.</p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="col">
            <h2 class="text-center text-decoration-underline fw-bolder ">Nuestros métodos de producción</h2>
            <p class="" style="text-align: justify;">Somos una marca de Alpaca que nació en Arequipa y nuestro compromiso es ayudar a más mujeres peruanas integrándolas en nuestra cadena de suministro como brillantes artesanas poseedoras de antiguos conocimientos textiles.</p>
        </div>
    </div>
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 ">
            <div class=" col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">Tejido a mano</h3>
                <p class="text-justify" style="text-align: justify;">Gracias a nuestros programas de capacitación especializados en tejido a mano y telar es que podemos elaborar delicadas prendas hechas en fibras naturales.</p>

            </div>
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">Fundación Mi primera puntada</h3>
                <p class="text-justify" style="text-align: justify;">Tenemos el objetivo de crear nuestra fundación Mi primera puntada, continuamos con la misión de apoyar a más mujeres y niños en su camino de desarrollo.</p>

            </div>
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center">Nuestras Talentosas Mujeres</h3>
                <p class="text-justify" style="text-align: justify;">Le damos poder a quienes lo merecen y nos inspiramos en las diferencias que hacen únicas a las mujeres de distintos orígenes y estilos de vida.</p>

            </div>
        </div>
    </div>
</body>

</html>