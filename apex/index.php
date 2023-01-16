<?php
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=bari&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ika&utm_channel=dev#form
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ics&utm_channel=dev#form
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ika&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ics&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=CHRISTMAS&utm_channel=dev

$version = ' V.6.03';
$source = $_GET['utm_source'];
$campaign = $_GET['utm_campaign'];
$channel = $_GET['utm_channel'];

$titulo = '';
$banner_b1_l1 = '';
$banner_b1_l2 = '';
$banner_b1_l3 = '';
$banner_i1 = '';

switch($campaign) {
  case 'bari':
    $titulo = 'BARI';
    $banner_b1_l1 = 'LÍNEA HORECA';
    $banner_b1_l2 = 'Moderniza tu negocio!';
    $banner_b1_l3 = 'BARI';
    $banner_i1 = 'img/Banner-Bari.jpg';
    break;
  case 'ika':
    $titulo = 'IKA';
    $banner_b1_l1 = 'NUEVA LíNEA';
    $banner_b1_l2 = 'Dispensadoras automáticas';
    $banner_b1_l3 = 'IKA';
    $banner_i1 = 'img/Banner-IKA.jpg';
    break;
  case 'ics':
    $titulo = 'ICS';
    $banner_b1_l1 = 'TECNOLOGÍA';
    $banner_b1_l2 = 'Para los profesionales del Vending';
    $banner_b1_l3 = 'ICS';
    $banner_i1 = 'img/Banner-ICS.jpg';
    break;
  default:
    $titulo = 'CHRISTMAS';
    $banner_b1_l1 = 'NOS VAMOS!';
    $banner_b1_l2 = 'Estarémos de regreso con toda';
    $banner_b1_l3 = 'desde el 11 de Enero de 2023';
    $banner_i1 = 'img/Banner-IKA.jpg';
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>
      <?php
      echo "{$titulo}{$version}";
      ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10967388314"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-761511440');
    </script>

  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div
            class="h-100 d-inline-flex align-items-center border-start border-end px-3"
          >
            <small class="fa fa-phone-alt me-2"></small>
            <small>+57 3107860664</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-envelope-open me-2"></small>
            <small>mercadeo@inssa.com.co</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-clock me-2"></small>
            <small>Lun - Vie : 07 AM - 05 PM Sab</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-square border-end border-start" href="https://www.facebook.com/INSSASAS"
              ><i class="fab fa-facebook-f"></i
            ></a>
              <a class="btn btn-square border-end" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-square border-end" href="https://www.instagram.com/inssasas/"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <img class="w-100" src="img/logo inssa.png" width="50" height="50" alt="Image" />
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <div class="nav-item dropdown">
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src=<?php echo "{$banner_i1}"?> alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      <?php
                        echo "{$banner_b1_l1}";
                      ?>
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      <?php
                        echo "{$banner_b1_l2}";
                        echo "<br>";
                        echo "{$banner_b1_l3}";
                      ?>
                    </h1>
                    <a href="https://api.whatsapp.com/send?phone=573107860664" class="btn btn-primary py-3 px-5"
                      >Contáctanos</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/Inssa.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3 borde-redondeado"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3 borde-redondeado"
                >
                  <h1 class="text-white">40</h1>
                  <h2 class="text-white">años</h2>
                  <h5 class="text-white mb-0">de experiencia</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h1 class="display-6 mb-0">
                  ¿Por qué comprar una dispensadora IKA?
                </h1>
              </div>
              <p>
                Es  negocio rentable y eficiente, no debes pensar en locales, remodelaciones, decoración,
                estantería, ni personal.
                Con capacitación, asesoria, tu producto y tu dispensadora IKA, estás listo para obtener,
                ganancias 24/7, entregas 100% automatizadas, retorno de inversión y control total de tu operación.

              </p>
              <p class="mb-4">
                Si buscas un negocio moderno, que te exija muy poco tiempo, y con una alta rentabilidad las
                dispensadoras IKA sin duda son para ti.
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Servicio automático</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Ventas 24/7 </h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Fácil de manejar</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Déjate sorprender</h6>
              <h1 class="display-6 mb-0">
                La Línea IKA es mucho más que dispensadoras modernas, y de la más alta calidad.
              </h1>
            </div>
          </div>
          <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href="https://api.whatsapp.com/send?phone=573107860664">Cotizar</a>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-3-AMBIENTE.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es servicio</h5>
                <p>
                  El mejor servicio técnico pos venta del mercado para tu dispensadora.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-3-COMBI.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es asesoría</h5>
                <p>
                  100% especializada y personalizada para la estrategia de tu negocio.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-4-AMBIENTE.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es respaldo</h5>
                <p>
                  De proveedores y profesionales del vending, brindando respaldo para su
                  dispensadora en cualquier momento.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-4-E-M-COMBI.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es experiencia</h5>
                <p>
                  De 40 años siendo líderes en brindar soluciones en el mercado del vending.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-5-COMBI.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es tecnología</h5>
                <p>
                  Con un equipo especializado en desarrollar
                  soluciones tecnológicas, para controlar y automatizar su operación.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-CONGELADOS.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es cubrimiento a nivel nacional</h5>
                <p>
                  IKA es venta, transporte, asesoría, servicio, respaldo y tecnología a nivel nacional.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5" id="form">
        <div class="row g-5">
          <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-white text-uppercase mb-2">Contáctanos</h6>
              <h1 class="display-6 text-white mb-0">
                Comunicate con nosotros, y pregunta por tu dispensadora
              </h1>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
            <form>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="gname"
                      placeholder="Gurdian Name"
                    />
                    <label for="gname">Nombre</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control bg-dark border-0"
                      id="gmail"
                      placeholder="Gurdian Email"
                    />
                    <label for="gmail">Correo</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="cname"
                      placeholder="Child Name"
                    />
                    <label for="cname">Celular</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="cage"
                      placeholder="Child Age"
                    />
                    <label for="cage">Ciudad</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-dark border-0"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Producto</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h1 class="text-white mb-4">
              <i class="fa fa-building text-primary me-3"></i>Inssa
            </h1>
            <p>
              Somos una organización que cree en los emprendedores y en las empresas.
              Asesoramos, gestionamos, conseguimos y ofrecemos oportunidades de nuevos negocios.
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Sedes</h4>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Bogotá: Cra 26# 78-47
            </p>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Cali: Calle 25nte # 5b-54
            </p>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Medellín: Calle 10s # 50ff - 28
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>310 786 0664</p>
            <p><i class="fa fa-envelope me-3"></i>mercadeo@inssa.com.co</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Newsletter</h4>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By <a href="https://htmlcodex.com">HTML Codex</a>
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
