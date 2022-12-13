<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="assets/logo.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                    <ul class="navbar-nav"><a href="index.php" class="nav-link text-black hover-overlay font-weight-light font-dm-sans" category="all">Inicio</a></ul>
                    <ul class="navbar-nav"><a href="productos.php" class="nav-link text-black hover-overlay font-weight-light font-dm-sans" category="all">Productos</a></ul>
                    <ul class="navbar-nav"><a href="nosotros.php" class="nav-link text-black hover-overlay font-weight-light font-dm-sans" category="all">Nosotros</a></ul>

                </div>
                
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="col pt-5">
            <h2 class="text-center text-decoration-underline fw-bolder font-dm-sans  mamnos" style="font-size: 1.3rem;">¿Quiénes somos?</h2>
            <p class="font-dm-sans" style="text-align: center;">Somos una tienda de ropa de lana que nació en Huanta y nuestro compromiso es ayudar a más mujeres peruanas integrándolas en nuestra cadena de suministro como brillantes artesanas poseedoras de antiguos conocimientos textiles.</p>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 ">
            <div class="col">
                <img src="./assets/img/logo.png" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">Mi primera puntada</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">En Mi primera puntada estamos comprometidos con la producción responsable, presevar el legador cultural y generar una vida sustentable a las comunidades con las que trabajamos.</p>

            </div>
            <div class="col">
                <img src="./assets/img/efrael.jpg" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">CEO de Mi primera puntada</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">Efrael Junior, CEO de Mi primera puntada, dio el primer paso para el emprendimiento de la venta de ropa de lana con la finalidad de brindar calidad a nuestros clientes.</p>

            </div>
            <div class="col">
                <img src="./assets/img/huanta.png" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">Huanta - Perú</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">Huanta la bella Esmeralda de los Andes, es una provincia importante en crianza de llamas y obejas para extraer lana para nuestra producción.</p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="col">
            <h2 class="text-center text-decoration-underline fw-bolder font-dm-sans  mamnos carrios" style="font-size: 1.3rem;">Nuestros métodos de producción</h2>
            <p class="font-dm-sans" style="text-align: center;">Nuestras prendas están hechas a mano con el más alto nivel de calidad y contribuyendo a mejorar el impacto ambiental.</p>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 ">
            <div class=" col">
                <img src="./assets/img/manos.jpg" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">Tejido a mano</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">Gracias a nuestras tejedoras especializadas en tejido a mano y telar es que podemos elaborar delicadas prendas hechas en fibras naturales.</p>

            </div>
            <div class="col">
                <img src="./assets/img/ninia.jpg" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">Fundación Mi primera puntada</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">Tenemos el objetivo de crear nuestra fundación Mi primera puntada, continuamos con la misión de apoyar a más mujeres y niños en su camino de desarrollo.</p>

            </div>
            <div class="col">
                <img src="./assets/img/seniora.jpg" alt="logo" class="w-100">
                <h3 class="text-center carrios py-3">Nuestras Talentosas Mujeres</h3>
                <p class="text-justify font-dm-sans" style="text-align: justify;">Le damos poder a quienes lo merecen y nos inspiramos en las diferencias que hacen únicas a las mujeres de distintos orígenes y estilos de vida.</p>

            </div>
        </div>
    </div>
</body>
<?php include "footer.php" ?>
    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white font-dm-sans">Copyright &copy; mi primera puntada 2022</p>
        </div>
    </footer>
</html>