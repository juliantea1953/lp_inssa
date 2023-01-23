<?php
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=bari&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ika&utm_channel=dev#form
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ics&utm_channel=dev#form
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ika&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_campaign=ics&utm_channel=dev
//https://inssa.com.co/lp/apex/?utm_source=ob&utm_medium=correo&utm_campaign=hospitalario&utm_channel=dev#form

$version = ' V.6.03';
$source = $_GET['utm_source'];
$campaign = $_GET['utm_campaign'];
$channel = $_GET['utm_channel'];

$titulo = '';
$banner_b1_l1 = '';
$banner_b1_l2 = '';
$banner_b1_l3 = '';
$banner_i1 = '';

switch ($campaign) {
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

    case 'hospitalario':
        $titulo = 'hospitalario';
        //Primer banner start
        $banner_b1_l1 = 'EAS HOSPITALARIO';
        $banner_b1_l2 = 'ENTREGA AUTOMÁTICA DE DOTACIÓN HOSPITALARIA.';
        $banner_b1_l3 = '';
        $banner_i1 = 'img/hospitalario/portrait-of-female-woman-nurse-surgeon-or-staff-member-dressed-in-surgical-scrubs-gown-mask-and-hair-net-in-hospital-operating-room-theater.jpg';
        //Primer banner end

        //Segundo banner start
        $banner_b2_b1 = "EAS HOSPITALARIO";
        $banner_b2_b2 = "Ofrece a tu equipo de trabajo o usuarios productos hospitalarios que estén cerca al alcance de la mano, como batas, medicamentos o productos de cuidado para personal clínico.";
        $banner_b2_b3_b1 = "Reducción de mermas.";
        $banner_b2_b3_b2 = "Método de identificación.";
        $banner_b2_b3_b3 = "Registro de entregas.";
        $banner_i2 = 'img/hospitalario/banner_pequeño.jpg';
        //Segundo banner end

        //Tercer banner start
        $banner_b3_b1 = "Otros productos para el control y entrega automática de dotación hospitalaria.";
        $color_peq = "background-color: #2BBBEE !important;";
        $imagen_cata1 = "img/hospitalario/Producto-GABINETE-INTELIGENTE.png";
        $banner_b3_p1 = "Smart box monitorea y registra la entrega y devolución de insumos hospitalarios
                        de gran tamaño y valormáquinaria como monitores cardiacos, instrumental quirúrgico
                        y más.";
        $imagen_cata2 = "img/hospitalario/Producto-MD.png";
        $banner_b3_p2 = "Dispositivo de identificación que sumado al software ICS, permite identificar al
                        usuario y registrar las devoluciones de los productos retirados previamente de la
                        dispensadora EAS";
        $imagen_cata3 = "img/hospitalario/Producto-STORE---S.png";
        $banner_b3_p3 = "Es un software que permite gestionar la entrega de dotaciones y suministros,
                        utilizando un método de identificación “escáner” para llevar el control por
                        usuarios y por productos a entregar.";

          $Prod1 = "style = \"display: block\"";
          $Prod2 = "style = \"display: block\"";
          $Prod3 = "style = \"display: block\"";
          $Prod4 = "style = \"display: none\"";
          $Prod5 = "style = \"display: none\"";
          $Prod6 = "style = \"display: none\"";
        //Tercer banner end

        //Form start
        $baner_i3 = "style=\"background-image: url('./img/hospitalario/team-of-young-specialist-doctors-standing-in-the-corridor-of-the-hospital.jpg')\"";
        //Form end
        break;

        case 'EPP':
          $titulo = 'asdasdad';
          //Primer banner start
          $banner_b1_l1 = 'EAS HOSPITALARIO';
          $banner_b1_l2 = 'ENTREGA AUTOMÁTICA DE DOTACIÓN HOSPITALARIA.';
          $banner_b1_l3 = '';
          $banner_i1 = 'img/EPP/portrait-of-female-woman-nurse-surgeon-or-staff-member-dressed-in-surgical-scrubs-gown-mask-and-hair-net-in-hospital-operating-room-theater.jpg';
          //Primer banner end
  
          //Segundo banner start
          $banner_b2_b1 = "EAS HOSPITALARIO";
          $banner_b2_b2 = "Ofrece a tu equipo de trabajo o usuarios productos hospitalarios que estén cerca al alcance de la mano, como batas, medicamentos o productos de cuidado para personal clínico.";
          $banner_b2_b3_b1 = "Reducción de mermas.";
          $banner_b2_b3_b2 = "Método de identificación.";
          $banner_b2_b3_b3 = "Registro de entregas.";
          $banner_i2 = 'img/hospitalario/banner_pequeño.jpg';
          //Segundo banner end
  
          //Tercer banner start
          $banner_b3_b1 = "Otros productos para el control y entrega automática de dotación hospitalaria.";
          $color_peq = "background-color: #2BBBEE !important;";
          $imagen_cata1 = "img/hospitalario/Producto-GABINETE-INTELIGENTE.png";
          $banner_b3_p1 = "Smart box monitorea y registra la entrega y devolución de insumos hospitalarios
                          de gran tamaño y valormáquinaria como monitores cardiacos, instrumental quirúrgico
                          y más.";
          $imagen_cata2 = "img/hospitalario/Producto-MD.png";
          $banner_b3_p2 = "Dispositivo de identificación que sumado al software ICS, permite identificar al
                          usuario y registrar las devoluciones de los productos retirados previamente de la
                          dispensadora EAS";
          $imagen_cata3 = "img/hospitalario/Producto-STORE---S.png";
          $banner_b3_p3 = "Es un software que permite gestionar la entrega de dotaciones y suministros,
                          utilizando un método de identificación “escáner” para llevar el control por
                          usuarios y por productos a entregar.";
          

          
          //Tercer banner end
  
          //Form start
          $baner_i3 = "style=\"background-image: url('./img/hospitalario/team-of-young-specialist-doctors-standing-in-the-corridor-of-the-hospital.jpg')\"";
          //Form end
          break;

    default:
        $titulo = 'CHRISTMAS';
        $banner_b1_l1 = 'NOS VAMOS!';
        $banner_b1_l2 = 'Estarémos de regreso con toda';
        $banner_b1_l3 = 'desde el 11 de Enero de 2023';
        $banner_i1 = 'img/Banner-IKA.jpg';
        $banner_b2_b1 = "¿Por qué comprar una dispensadora IKA?";
        $banner_b2_b2 = "Es un negocio rentable y eficiente, no debes pensar en locales, remodelaciones, decoración,
        estantería, ni personal.
        Con capacitación, asesoria, tu producto y tu dispensadora IKA, estás listo para obtener,
        ganancias 24/7, entregas 100% automatizadas, retorno de inversión y control total de tu operación.";
        break;
}

// define variables and set to empty values
/* $name = $email = $gender = $comment = $website = ""; */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /* $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]); */

  require 'vendor/autoload.php';

  $connection = new MongoDB\Client("mongodb+srv://invitadoICS:InvICS2020@inssacs.rekt9.mongodb.net");
  $database = $connection->devcrmdb;
  $collection = $database->prospects;

  $insert = array(
      /* "nombre" => $_POST["gname"],
      "correo" => $_POST['gmail'],
      "celular" => $_POST['cname'],
      "municipio" => $_POST['municipio'],
      "ciudad" => $_POST['ciudad'],
      "producto" => $_POST["producto"], */

  
    "nombre" => $_POST["gname"],
    "prospectadoPor"=> "6286b8eb53b9951a40279bbd",
    "correo" => $_POST['gmail'],
    "telefono" => $_POST['cname'],
    "empresa"=> "Ardicco ",
    "linea"=> "ANUNCIO_C POTENCIALES_PARÍS",
    "producto_de_interes" => $_POST["producto"],
    "regional"=>"Medellín",
    "ciudad"=> $_POST['ciudad'],
    "comentario"=> "Contactar por ( ) ",
    "tipo_anuncio"=>"Anuncio_c potenciales_parís",
    "campana"=> "Campaña_parís_agosto. - )",
    "canal"=> "Instagm",
    "fecha_ingreso_prospecto"=> "$NOW()",
    "ultimo_estado"=>"Interesado",
    "seguimiento"=> [],
    "__v"=> 0
  

  );

  $collection->insertOne($insert);

  echo '<script type="text/javascript">';
  echo 'alert($data)';
  echo '</script>';

  echo '<script language="javascript">window.location.replace("https://api.whatsapp.com/send?phone=573102242724");</script>';

  //echo '<script language="javascript">window.location.replace = \"https://api.whatsapp.com/send?phone=573102242724\";</script>';

/* echo "<script window.location.replace = \"https://api.whatsapp.com/send?phone=573102242724\"; > </script>"; */

}


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<script >
/* document.getElementById('idDelDiv').style.display = 'block'; */




  </script>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>
      <?php echo "{$titulo}{$version}"; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- <meta content="" name="keywords" />
    <meta content="" name="description" /> -->

    <meta charset="utf-8"><br>
<meta charset="utf-8">
<meta name="description" content="EAS Hospitalario INSSA" />
<meta property="og:title" content="INSSA EAS HOSPITALARIO" />
<meta property="og:url" content="https://www.inssa.com.co" />
<meta property="og:description" content="Dificultades entregando prendas hospitalarias?" />
<meta property="og:image" content="https://www.inssa.com.co/lp/correo/eas-hospitalario-big.jpg">
<meta property="og:image:secure_url" content="https://www.inssa.com.co/lp/correo/eas-hospitalario-big.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="EAS Hospitalario">
<meta name="twitter:description" content="EAS Hospitalario Tw">

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
            <small class="fa fa-phone-alt me-2 color_boton"></small>
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
        <a href="index.html" class="nav-item nav-link active">Inicio</a>
          <a href="about.html" class="nav-item nav-link">BARI</a>
          <a href="https://inssa-7363.myshopify.com/" class="nav-item nav-link">Tienda</a>
          <div class="nav-item dropdown">
      </div>


      
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src=<?php echo "{$banner_i1}" ?> alt="Image" />
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
                    <a href="https://inssa.com.co/lp/apex/?utm_source=ob&utm_medium=correo&utm_campaign=hospitalario&utm_channel=dev#form" class="btn btn-primary py-3 px-5 color_boton"
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
                src=<?php echo "{$banner_i2}" ?>
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3 borde-redondeado"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3 borde-redondeado color_boton "
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

                <?php
echo "{$banner_b2_b1}";
?>
                </h1>
              </div>
              <p>
                <?php
echo "{$banner_b2_b2}";
?>
              </p>
              <!-- <p class="mb-4">
                Si buscas un negocio moderno, que te exija muy poco tiempo, y con una alta rentabilidad las
                dispensadoras IKA sin duda son para ti.
              </p> -->
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0"><?php echo "{$banner_b2_b3_b1}"; ?> </h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0"><?php echo "{$banner_b2_b3_b2}"; ?> </h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0"><?php echo "{$banner_b2_b3_b3}"; ?> </h6>
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
                <?php echo "{$banner_b3_b1}"; ?>
              </h1>
            </div>
          </div>
          <!-- <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5 color_boton" href="https://api.whatsapp.com/send?phone=573102242724">Cotizar</a>
          </div> -->
        </div>

        <!-- servicios -->
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" id = <?php echo "{$Prod1}"?>>
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src= <?php echo "{$imagen_cata1}" ?> alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <!-- <h5 class="mb-3">IKA es servicio</h5> -->
                <p>
                <?php echo "{$banner_b3_p1}"; ?>

                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" <?php echo "{$Prod2}"?>>
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src= <?php echo "{$imagen_cata2}" ?> alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <!-- <h5 class="mb-3">IKA es asesoría</h5> -->
                <p>
                <?php echo "{$banner_b3_p2}"; ?>
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" <?php echo "{$Prod3}"?>>
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src= <?php echo "{$imagen_cata3}" ?> alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <!-- <h5 class="mb-3">IKA es respaldo</h5> -->
                <p>
                <?php echo "{$banner_b3_p1}"; ?>
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" <?php echo "{$Prod4}"?> >
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="img/IKA-4-E-M-COMBI.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">IKA es experiencia  </h5>
                <p>
                  De 40 años siendo líderes en brindar soluciones en el mercado del vending.
                </p>
                <a class="small" href=""
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" <?php echo "{$Prod5}"?>>
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
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" <?php echo "{$Prod6}"?>>
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

        <!-- servicios  End -->
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
      <?php echo "{$baner_i3}" ?>

    >


      <div class="container py-5" id="form">
        <div class="row g-5">
          <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s" style = "background: rgba(0, 0, 0, .40);">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-white text-uppercase mb-2">Contáctanos</h6>
              <h1 class="display-6 text-white mb-0">
              Conéctate directamente con un asesor dejando tus datos de contacto
              </h1>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">




            <form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  >
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="gname"
                      name="gname"
                      placeholder="Gurdian Name"
                      require
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
                      name="gmail"
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
                      name="cname"
                      placeholder="Child Name"
                    />
                    <label for="cname">Celular</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">



                    <select class="form-control bg-dark border-0" type="text"
                      class="form-control bg-dark border-0" onchange="ShowSelected();"
                      id="municipio" name="municipio" placeholder="Child Age">
                      <option value="0" disabled selected>Elija una opcion</option>
                    </select>
                    <label id="municipio" for="municipio">Municipio</label>
                    <!-- <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="cage"
                      placeholder="Child Age"
                    />
                    <label for="cage">Ciudad</label> -->
                  </div>
                </div>


                <script type="text/javascript">

</script>


                <div class="col-sm-6">
                  <div class="form-floating">

                    <select class="form-control bg-dark border-0" type="text"
                      class="form-control bg-dark border-0"
                      id="ciudad" name="ciudad" placeholder="Child Age">

                      <option value="0" disabled selected>Elija una opcion</option>
                    </select>

                    <label id="ciudad" for="ciudad">Ciudad</label>

                    <!-- <input
                      type="text"
                      class="form-control bg-dark border-0"
                      id="cage"
                      placeholder="Child Age"
                    />
                    <label for="cage">Ciudad</label> -->
                  </div>
                </div>




                <div class="col-12">
                  <div class="form-floating">


                  <select class="form-control bg-dark border-0" type="text"
                      class="form-control bg-dark border-0"
                      id="producto" name="producto" placeholder="Child Age">

                      <option value="0" disabled selected>Elija una opcion</option>
                    </select>

                    <!-- <select
                      class="form-control bg-dark border-0"
                      placeholder="Leave a message here"
                      id="producto"
                      name="producto"
                      style="height: 100px margin-bottom: 100px;"

                    > -->

                    <label id="producto" for="producto">Producto</label>
                  </div>
                </div>
                <div class="col-12">

                

                <input class="btn btn-primary w-100 py-3 color_boton" type="submit" name="submit" value="Conectate con un asesor.">







                <?php


?>

               <!--  <a  class="btn btn-primary w-100 py-3 color_boton" onclick = "clickMe()"
                      >Enviar</a> -->



                      <!-- <a  class="btn btn-primary w-100 py-3" onclick = "clickMe();"
                      >Enviar</a> -->

                 <!--  <button class="btn btn-primary w-100 py-3"  onclick = "clickMe();">
                    Enviar -->

                  </button>




                </div>
              </div>




<script>






/* Para obtener el valor */
/* var cod = document.getElementById("municipio").value;
console.log(cod); */






/* var results = temp.filter(function (temp) { return temp.departamento == cod; });
var firstObj = (results.length > 0) ? results[0] : null;

alert(results);
alert(firstObj); */




/* Para obtener el texto
var combo = document.getElementById("municipio");
var selected = combo.options[combo.selectedIndex].text;
alert(selected); */



</script>



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
              <!-- <i class="fa fa-building text-primary me-3" src="img/logo inssa.png"></i>Inssa -->
              <img class="fa fa-building text-primary me-3" src="img/logo inssa.png" width="80" height="60" alt="Image" /> Inssa
            </h1>
            <p>
              Somos una organización que cree en los emprendedores y en las empresas.
              Asesoramos, gestionamos, conseguimos y ofrecemos oportunidades de nuevos negocios.
            </p>
            <div class="d-flex pt-2">
              <!-- <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a> -->
              <a class="btn btn-square btn-outline-primary me-1" href="https://www.facebook.com/INSSASAS"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <!-- <a class="btn btn-square btn-outline-primary me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a> -->
              <a class="btn btn-square btn-outline-primary me-0" href="https://www.instagram.com/inssasas/"
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
          <!-- <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div> -->
          <!-- <div class="col-lg-3 col-md-6">
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
          </div> -->
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">

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
    <a href="#" class="btn btn-lg color_boton btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up color_boton"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    



<?php

require "departamentos.php";
require "da.php";
//include "usuarios.php";
/* include "usuarios.php" */
?>












  </body>
</html>

