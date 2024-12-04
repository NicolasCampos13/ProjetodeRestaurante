<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/cardapio.css" />
  </head>

  <body> 


  <?php
  include '../_inc/menu.php';
  ?>

    <div class="container my-5">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-6">
            <img
              src="../img/pizzafaz.jpeg"
              class="img-fluid rounded-start"
              alt="Pizza"
              style="height: 360px"
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px; font-weight: bold">
                Como Começamos
              </h5>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus
                ipsam quibusdam ipsum delectus est consequuntur dolorum error
                assumenda distinctio, eligendi, velit nihil doloremque fugit ab.
                Aperiam repudiandae minus aspernatur quidem debitis, velit
                assumenda, officiis consequuntur impedit dolorum vitae voluptas
                qui nemo? Quaerat explicabo sed, dolor deserunt incidunt dolorum
                asperiores dicta, velit soluta aperiam beatae eaque illum.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h2 class="text-center mb-4">Nossas Conquistas</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card">
            <img
              src="../img/desenho.jpeg"
              class="card-img-top"
              alt="Primeira Franquia"
              style="max-height: 380px;"
            />
            <div class="card-body">
              <h5 class="card-title">Primeira Franquia</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../img/entrega.jpeg" class="card-img-top" alt="Entrega" />
            <div class="card-body">
              <h5 class="card-title">Entregas Rápidas</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../img/premio.jpeg" class="card-img-top" alt="Prêmio" />
            <div class="card-body">
              <h5 class="card-title">Prêmios</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <footer class="bg-light text-dark mt-5">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-4">
            <h2>Sobre a Pizzaria</h2>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Perspiciatis, accusantium.
            </p>
          </div>
          <div class="col-md-4">
            <h2>Páginas</h2>
            <ul class="list-unstyled">
              <li><a href="../index.html">Home</a></li>
              <li><a href="../pages/cardapio.html">Cardápio</a></li>
              <li><a href="../pages/local.html">Local</a></li>
              <li><a href="../pages/sobre.html">Sobre</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2>Localidade</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </footer>

    <style>
      ul li a {
        color: black;
        text-decoration: none;
      }
      ul {
        margin: 0;
        padding: 0;
      }
      ul li a:hover {
        font-weight: bold;
      }
    </style>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
