<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/local.php">Localização</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/cardapio.php">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/sobre.php">Sobre</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16" style="margin-right: 10px;">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
            
          </form>
        </div>
      </div>
    </nav>

    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      style="max-height: 60vh; overflow: hidden"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/pizza.jpg"
            class="d-block w-100"
            alt="Pizza"
            style="max-height: 60vh; object-fit: cover"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="img/pizzacar.jpg"
            class="d-block w-100"
            alt="Pizza Car"
            style="max-height: 60vh; object-fit: cover"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        
        <div class="carousel-item">
          <img
            src="img/esfircar.png"
            class="d-block w-100"
            alt="Esfirra"
            style="max-height: 60vh; object-fit: cover"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container my-5">
      <h1 class="font-weight-bold mb-4">Promoções do Dia</h1>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="img/napolitana.jpeg"
              class="card-img-top"
              alt="Napolitana"
            />
            <div class="card-body">
              <h5 class="card-title">Napolitana</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/queijos.jpeg" class="card-img-top" alt="4 Queijos" style="max-height: 280px;"/>
            <div class="card-body">
              <h5 class="card-title">4 Queijos</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="img/calabresa.jpeg"
              class="card-img-top"
              alt="Calabresa"
            />
            <div class="card-body">
              <h5 class="card-title">Calabresa</h5>
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

    <div class="container my-5">
      <div class="card mb-3" style="height: auto">
        <div class="row g-0">
          <div class="col-md-6">
            <img
              src="img/fazendopizza.jpeg"
              class="img-fluid rounded-start"
              alt="Fazendo Pizza"
              style="
                max-height: 100%;
                object-fit: cover;
                height: 360px;
                margin: 10px;
              "
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px; font-weight: bold">
                Diversas Franquias Disponíveis
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
    </div>

    <div class="sugest">
      <div class="card text-bg-dark">
        <img src="img/sugestao.jpg" class="card-img" alt="..." style="max-height: 400px;">
        <div class="card-img-overlay">
          <div class="texto" style="padding: 8px ;background-color: rgb(0, 0, 0); margin: 10px ; max-width: 760px; border-radius: 8px;">
          <h5 class="card-title">Sugestao do Chef</h5>
          <p class="card-text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatem eos praesentium eius commodi, ipsa itaque est eaque nostrum cupiditate magni ad labore quidem quaerat officiis, alias, explicabo quibusdam quis veniam reiciendis similique obcaecati deserunt. Facere delectus dolores soluta commodi.</p>
          <h2>Ingredientes</h2>
          <ol>
            <li>lorem</li>
            <li>lorem</li>
            <li>lorem</li>
            <li>lorem</li>
            <li>lorem</li>
            <li>lorem</li>
          </ol>
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
              <li><a href="index.html">Home</a></li>
              <li><a href="pages/cardapio.html">Cardápio</a></li>
              <li><a href="pages/local.html">Local</a></li>
              <li><a href="pages/sobre.html">Sobre</a></li>
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

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
