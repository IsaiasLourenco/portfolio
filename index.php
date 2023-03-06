<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PORTFOLIO - <?php echo $nome_site ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/oficiallogo.ico" type="image/x-icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <?php require_once("toolbar.php"); ?>

  <!-- Navbar & Carousel Start -->
  <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
      <a href="index.php" class="navbar-brand">
        <h1 class="m-0 text-white"><img src="img/logo.png" alt="Logo img" />
          <i class=""></i><?php echo $nome_site ?>
        </h1>
      </a>

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="about.php" class="nav-item nav-link">Sobre</a>
          <a href="service.php" class="nav-item nav-link">Serviços</a>
          <!--<a href="blog.php" class="nav-item nav-link">Blog</a>-->
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Conteúdo</a>
            <div class="dropdown-menu m-0">
              <a href="price.php" class="dropdown-item">Planos e Preços</a>
              <a href="feature.php" class="dropdown-item">Skills</a>
              <a href="team.php" class="dropdown-item">Nosso Time</a>
              <!--<a href="testimonial.php" class="dropdown-item">Depoimentos</a>-->
              <a href="quote.php" class="dropdown-item">Orçamento Gratuito</a>
            </div>
          </div>
          <a href="contact.php" class="nav-item nav-link">Contato</a>
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <a href="products.php" class="btn btn-primary py-2 px-4 me-3 slideInLeft">Produtos</a>
        <a target="_blank" href="sistema/index.php" class="btn btn-outline-light py-2 px-4 me-3 slideInRight">Login</a>
      </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/carr-1.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                Criativos & Inovadores
              </h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                Soluções Digitais Criativas & Inovadoras
              </h1>
              <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Orçamento
                Gratuito</a>
              <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carr-2.jpg" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                Receita Digital de Sucesso
              </h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                Nosso objetivo é fazer com maestria
              </h1>
              <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Orçamento
                Gratuito</a>
              <a href="contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo </span>
    </button>
  </div>
  </div>
  <!-- Navbar & Carousel End -->

  <!-- Full Screen Search Start -->
  <div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
        <div class="modal-header border-0">
          <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
          <div class="input-group" style="max-width: 600px">
            <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Digite a palavra que quer achar" />
            <button class="btn btn-primary px-4">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Full Screen Search End -->

  <?php require_once("facts.php"); ?>

  <?php require_once("within_about.php"); ?>

  <?php require_once("within_feature.php"); ?>

  <?php require_once("within_service.php"); ?>

  <?php require_once("within_price.php"); ?>

  <?php require_once("within_quote.php"); ?>

  <?php require_once("within_team.php"); ?>

  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
        <h5 class="fw-bold text-primary text-uppercase">Últimas notícias do nosso Blog</h5>
        <h1 class="mb-0">Leia os últimos artigos publicados no nosso Blog</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden">
              <img class="img-fluid" src="img/revista-1.jpg" alt="" />
              <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Levantamento de Requisitos</a>
            </div>
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>João
                  Marques</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>01
                  Jan, 2019</small>
              </div>
              <h4 class="mb-3">Levantando as necessidades do seu negócio</h4>
              <p>
                Como absorver as necessidades do seu cliente e transformar em um aplicativo formidável
              </p>
              <a class="text-uppercase" href="">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden">
              <img class="img-fluid" src="img/revista-2.jpg" alt="" />
              <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Desenvolvimento</a>
            </div>
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Bruno
                  Aguilar</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>14
                  Mar, 2021</small>
              </div>
              <h4 class="mb-3">Equipe de desenvolvimento Scrum Agile</h4>
              <p>
                Equipe rápida, ágil e muito próxima da perfeição em seus trabalhos
              </p>
              <a class="text-uppercase" href="">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden">
              <img class="img-fluid" src="img/revista-3.jpg" alt="" />
              <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Garantia de Qualidade</a>
            </div>
            <div class="p-4">
              <div class="d-flex mb-3">
                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Isaias
                  Lourenço</small>
                <small><i class="far fa-calendar-alt text-primary me-2"></i>08
                  Ago, 2022</small>
              </div>
              <h4 class="mb-3">Softwares testados em todos os aspectos</h4>
              <p>
                Formando uma equipe e um planejamento de testes para seu projeto tecnológico
              </p>
              <a class="text-uppercase" href="">Saiba Mais <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Start -->

  <?php require_once("rodape.php"); ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>