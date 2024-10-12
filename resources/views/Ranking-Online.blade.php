<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Escape Room</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .grupo{
        background-image: url("{{ asset('assets/img/todos.png') }}");
    }
    #hero {
  background: url("{{ asset('assets/img/geral.jpg') }}") top center;
}
.cta {
  background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('assets/img/cta-bg.jpg') }}") fixed center center;
}
 
.counts .image {
  background: url("{{ asset('assets/img/counts-img.jpg') }}") center center no-repeat;
}
.testimonials {
  background: url("{{ asset('assets/img/testimonials-bg.jpg') }}") no-repeat;
}
  </style>

</head>

<body>
<div class="grupo">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-lg-between">


        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
   
          <h1 class="escp">The Escape Room</h1>
 
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <br>

            <br>
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="/">Home</a></h3>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main" class="py-5" style="background-color: #f8f9fa; min-height: 100vh;">
  <div class="container">
    <h1 class="text-center mb-4" style="color: #333;">Ranking Online</h1>
    
    <!-- Barra de Pesquisa -->
    <form method="GET" action="{{ route('relatorios.index') }}" class="mb-4">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Pesquisar por nome, nick ou tempo" value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Pesquisar</button>
        </div>
      </div>
    </form>

    <!-- Tabela de Ranking Estilizada -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered" style="background-color: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <thead class="thead-light">
          <tr>
            <th scope="col">Posição</th>
            <th scope="col">Nome/Nick</th>
            <th scope="col">Tempo</th>
          </tr>
        </thead>
        <tbody>
          @if($relatorios->count() > 0)
            @foreach($relatorios as $index => $relatorio)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $relatorio->nome }}</td>
              <td>{{ $relatorio->tempo }}</td>
            </tr>
            @endforeach
          @else
            <tr>
              <td colspan="3" class="text-center">Nenhum resultado encontrado</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</main>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <p>
                Rua Ariovaldo Silveira Franco<br>
                , 237 - Mirante, Mogi Mirim -SP<br><br>
                <strong>Email:</strong> escaperoom.expo@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="www.instagram.com/escaperoom_expo/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>

            
            </ul>
          </div>


        

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Escape Room</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>