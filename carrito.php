<?php require_once "config/conexion.php";
require_once "config/config.php";
?>
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
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                    <ul class="navbar-nav"><a href="index.php" class="nav-link text-black font-dm-sans" category="all">Inicio</a></ul>
                    <ul class="navbar-nav"><a href="productos.php" class="nav-link text-black font-dm-sans" category="all">Productos</a></ul>
                    <ul class="navbar-nav"><a href="nosotros.php" class="nav-link text-black font-dm-sans" category="all">Nosotros</a></ul>

                </div>
                
            </div>
        </nav>
    </div>
    <!-- Header-->
    <div class="mt-5">

        <div class="mt-5 pt-5">
            <section class="py-5">
                <div>
                    <h1 class="container text-center carrios">Tu carrito de compras</h1>
                </div>

                <div class="container px-4 px-lg-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover font-dm-sans">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tblCarrito">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <style>
                            @media (min-width: 640px) {

                                .pp {
                                    display: grid;
                                    grid-template:
                                        repeat(1, 1fr) /repeat(2, 1fr);
                                    gap: var(--sm);
                                }

                                .pay {
                                    padding: 0 2rem;
                                }
                            }
                        </style>
                        <div class="pp">
                            <div class="col-md-12 ms-auto pay py-3 font-dm-sans">
                                <h4 class="font-dm-sans">Total a Pagar: S/.<span id="total_pagar"> 0.00</span></h4>
                                <div class="d-grid gap-2">
                                    <div id="paypal-button-container"></div>

                                </div>
                            </div>
                            <div class="col-md-12 ms-auto pay py-3">
                                <h4 class="font-dm-sans">Puedes pagar también:</h4>
                                <div class="d-grid gap-2">
                                    <style>
                                        .bancos {
                                            display: grid;
                                            grid-template: repeat(1, 1fr) / repeat(2, 1fr);
                                            align-items: center;
                                            align-content: center;
                                        }

                                        @media (min-width: 640px) {
                                            .bancos {
                                                grid-template: repeat(1, 1fr) / repeat(4, 1fr);
                                            }
                                        }

                                        @media (min-width: 900px) {
                                            .bancos {
                                                grid-template: repeat(1, 1fr) / repeat(5, 1fr);
                                            }
                                        }

                                        @media (min-width: 1200px) {
                                            .bancos {
                                                grid-template: repeat(1, 1fr) / repeat(6, 1fr);
                                            }
                                        }

                                        @media (min-width: 1500px) {
                                            .bancos {
                                                grid-template: repeat(1, 1fr) / repeat(7, 1fr);
                                            }
                                        }

                                        @media (min-width: 1800px) {
                                            .bancos {
                                                grid-template: repeat(1, 1fr) / repeat(8, 1fr);
                                            }
                                        }
                                    </style>
                                    <div class="py-4 bancos">
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/bn.svg" alt="bn" class="px-1 ">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/Visa.svg" alt="visa" class="px-1">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/bcp.svg" alt="bcp" class="px-1">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/interbank.svg" alt="interbank" class="px-1">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/bbva.svg" alt="bbva" class="px-1">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/yape.svg" alt="yape" class="px-1">
                                        </div>
                                        <div class="d-flex justify-content-center py-1">
                                            <img src="./assets/icon/plin.svg" alt="plin" class="px-1">
                                        </div>







                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-outline-primary shadow-sm rounded-bottom px-5 font-dm-sans" id="abrirProducto"> <strong>Pagar</strong> </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <button class="btn btn-warning py-2 font-dm-sans" style="font-weight: 500;" type="button" id="btnVaciar">Vaciar Carrito</button>
                    </div>
                    <div class="d-flex pr-1 text-center justify-content-center py-3">
                        <p class="font-dm-sans py-0 my-0 px-1"> <strong class="f-weight">Nota* </strong>
                        </p>
                        <p class="desc font-dm-sans py-0">Una vez realizado el depósito envíenos un mensaje a nuestro WhatsApp corporativo, gracias.</p>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=51915068001&text=Hola%21%20%20e%20realizado%20la%20compra%20de%20un%20producto." class=" btn btn-outline-success d-flex justify-content-center align-items-center" style="font-weight: 500;">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg><span class="px-1 font-dm-sans"> <strong>WhatsApp</strong> </span></a>
                </div>
        </div>
        <div id="productos" class="modal fade mt-5 " tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content border-warning">
                    <div class="modal-header bg-gradient-primary text-black">
                        <div>
                            <h5 class="modal-title font-dm-sans" id="title">Nuestros métodos de pago</h5>
                            <div class="d-flex pr-1">
                                <p class="font-dm-sans py-0 my-0 px-1"> <strong class="f-weight">Nota* </strong>
                                </p>
                                <p class="desc font-dm-sans py-0">Una vez realizado el depósito envíenos un mensaje a nuestro WhatsApp corporativo, gracias.</p>
                            </div>
                        </div>
                        <a href="./carrito.php" class="text-black" style="top: -10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></a>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="text-center list-group-item border-danger bg-white p-0">
                                <img src="./assets/icon/bn.svg" alt="bn">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                            <div class="text-center list-group-item border-primary p-0">
                                <img src="./assets/icon/bcp.svg" alt="bcp">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                            <div class="text-center list-group-item border-success p-0">
                                <img src="./assets/icon/ib.svg" alt="interbank">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                            <div class="text-center list-group-item border-primary p-0">
                                <img src="./assets/icon/bbva.svg" alt="bcp">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                            <style>
                                .yape {
                                    border-color: #9419A3;
                                }
                            </style>
                            <div class="text-center list-group-item yape p-0">
                                <img src="./assets/icon/yape.svg" alt="bcp">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                            <div class="text-center list-group-item border-info p-0">
                                <img src="./assets/icon/plin.svg" alt="bcp">
                                <h4 class="m-0 p-0 font-weight-normal font-dm-sans">Número de cuenta:</h4>
                                <p class="m-0 p-0 font-dm-sans">4422-5645-2345-1234</p>
                            </div>
                            <div class="py-1"></div>
                        </div>
                        <div class="modal-footer">
                            <a href="./carrito.php" class=" btn btn-outline-danger no-underline font-dm-sans">Cerrar</a>
                            <a  <a href="https://api.whatsapp.com/send?phone=51915068001&text=Hola%21%20%20e%20realizado%20la%20compra%20de%20un%20producto." class=" btn btn-outline-success d-flex justify-content-around align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg><span class="px-1 font-dm-sans"> <strong>WhatsApp</strong> </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>
    </div>
    <!-- Footer-->
    <?php include "footer.php" ?>
    <footer class="py-2 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white font-dm-sans ">Copyright &copy; mi primera puntada 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&locale=<?php echo LOCALE; ?>"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function(response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>S/. ${element.precio}</td>
                                <td>1</td>
                                <td>S/. ${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                            paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay'
                                },
                                createOrder: function(data, actions) {
                                    // This function sets up the details of the transaction, including the amount and line item details.
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: res.total
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    // This function captures the funds from the transaction.
                                    return actions.order.capture().then(function(details) {
                                        // This function shows a transaction success message to your buyer.
                                        alert('Transaction completed by ' + details.payer.name.given_name);
                                    });
                                }
                            }).render('#paypal-button-container');
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
</body>

</html>