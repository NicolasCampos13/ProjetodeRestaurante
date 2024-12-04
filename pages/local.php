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
              src="../img/pizzariadesenho.avif"
              class="img-fluid rounded-start"
              alt="..."
              style="max-height: 350px"
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px; font-weight: bold">
                Onde Estamos
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

      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px; font-weight: bold">
                Entregas rápidas e eficientes
              </h5>
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus
                ipsam quibusdam ipsum delectus est consequuntur dolorum error
                assumenda distinctio, velit assumenda, officiis consequuntur
                impedit dolorum vitae voluptas qui nemo? Quaerat explicabo sed,
                dolor deserunt incidunt dolorum asperiores dicta, velit soluta
                aperiam beatae eaque illum.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="../img/entregador.jpeg"
              class="img-fluid rounded-end"
              alt=""
              style="max-height: 350px"
            />
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
      <style>
        ul li a {
          color: black;
          text-decoration: none;
          list-style: none;
        }
        ul {
          margin: 0 auto;
          text-decoration: none;
          list-style: none;
        }
        .links {
          margin: 0 auto;
        }
        ul li a:hover {
          color: black;
          font-weight: bold;
          text-decoration: none;
          list-style: none;
        }
      </style>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
