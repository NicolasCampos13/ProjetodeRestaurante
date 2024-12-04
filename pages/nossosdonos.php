<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <style>
      .partner-img {
        width: 200px;
        height: 200px;
      }
      .partner-name {
        font-size: 1.5rem;
        margin-top: 10px;
      }
      .partner-role {
        font-size: 1.2rem;
        color: gray;
      }
    </style>
  </head>

  <body>



  <?php
  include '../_inc/menu.php';
  ?>

  
    <section class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-4">Nossos Parceiros</h2>
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <img
              src="../img/rosto1.jpeg"
              alt="Nome 1"
              class="rounded-circle mb-2 partner-img"
            />
            <h5 class="partner-name">Carlos</h5>
            <p class="partner-role">Dono</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <img
              src="../img/rosto2.jpeg"
              alt="Nome 2"
              class="rounded-circle mb-2 partner-img"
            />
            <h5 class="partner-name">Mariana</h5>
            <p class="partner-role">Sócia</p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <img
              src="../img/rosto3.jpeg"
              alt="Nome 3"
              class="rounded-circle mb-2 partner-img"
            />
            <h5 class="partner-name">Roberto</h5>
            <p class="partner-role">Sócio</p>
          </div>
        </div>
      </div>
    </section>

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
            <div class="links" style="display: flex">
              <ul>
                <li>
                  <a href="../index.html">Home</a>
                </li>
                <li>
                  <a href="../pages/cardapio.html">Cardápio</a>
                </li>
                <li>
                  <a href="../pages/local.html">Local</a>
                </li>
                <li>
                  <a href="../pages/sobre.html">Sobre</a>
                </li>
              </ul>
            </div>
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
