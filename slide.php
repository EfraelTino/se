<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <style>
    .sli {
      margin-top: 110px;
    }

    .ts {
      font-size: 22px;
      font-family: 'Carrois Gothic SC', sans-serif;
      font-weight: 800;
    }

    .dssd {
      font-size: 12px;
    }

    @media (min-width:640px) {
      .sli {
        margin-top: 40px;
      }

      .ts {
        font-size: 3rem;
        line-height: 2.5rem;
      }
      .dssd{
        font-size: 1.5rem;

        font-weight: 700
      }
    }

    @media (min-width:900px) {      
        .ts {
        font-size: 5rem;
      }

    }
    @media (min-width:1200px) {

      

      .ts {
        font-size: 5rem;
      }

    }
    @media (min-width:1500px) {

      

      .ts {
        font-size: 5.5rem;
      }

    }
    @media (min-width:1800px) {

      
      .ts {
        font-size: 8rem;
      }

    }
  </style>
  <div id="carouselExampleIndicators" class="carousel slide sli" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets/img/sl1.jpg" alt="First slide">
        <div class="carousel-caption ">

          <h5 class="ts">Mi primera puntada</h5>
          <p class="font-dm-sans dssd py-0 my-1">Ropas de lana de alta calidad</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/img/sl2.jpg" alt="Second slide">
        <div class="carousel-caption ">
          <h5 class=" ts my-2">Plasmando Arte</h5>
          <p class="font-dm-sans dssd py-0 my-1">Hecho con las mejores manos</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/img/sl3.jpg" alt="Third slide">
        <div class="carousel-caption ">
          <h5 class=" ts ">Bella Esmeralda de los Andes</h5>
          <p class="font-dm-sans dssd py-0 my-1">Producido por tejedoras en la bella esmeralda de los andes</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>