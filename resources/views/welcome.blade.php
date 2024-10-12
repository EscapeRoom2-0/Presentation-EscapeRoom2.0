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
    .grupo {
      background-image: url("{{ asset('assets/img/todos.png') }}");
    }

    #hero {
      background: url("{{ asset('assets/img/geral.jpg') }}") top center;
    }

    .cta {
      background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)),
      url("{{ asset('assets/img/cta-bg.jpg') }}") fixed center center;
    }

    .counts .image {
      background: url("{{ asset('assets/img/counts-img.jpg') }}") center center no-repeat;
    }

    .testimonials {
      background: url("{{ asset('assets/img/testimonials-bg.jpg') }}") no-repeat;
    }

    #fotos {
      color: red;
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
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
            <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
            <li><a href="#ll" class="nav-link scrollto">Patrocinios</a></li>
            <li><a class="nav-link scrollto" href="#team">Time</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
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
            <i class="ri-store-line"></i>
          
          <h3><a href="#tn" >Patrocinadores</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="col-xl-2 col-md-4">
       
        </div>
          <div class="icon-box">
            <br>
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="{{ route('relatorios.index') }}">Ranking</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <br>
            <i class="ri-database-2-line"></i>
            <h3><a href="#services">Serviços</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">
  </div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="fts/scape.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>O QUE É UMA ESCAPE ROOM?</h3>
            <br>
            <p class="fst-italic" style="font-size: 23px;">
              Uma sala de fuga é um jogo de aventura física em que os jogadores ficam trancados em uma sala e precisam
              usar elementos da sala para resolver uma série de quebra-cabeças e escapar dentro de um limite de tempo
              definido. Os jogos são versões físicas de videogames de “escape the room” ou “breakout”. Os jogos se
              passam em uma variedade de locais fictícios, como celas de prisão, masmorras e estações espaciais, e são
              populares como exercícios de formação de equipes.
            </p> <br id="tn" >
            <span id="ll"></span>
          </div>
        </div>
      </div>
    </section >
    <!-- End About Section -->

     <!-- ======= Clients Section ======= -->

  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="section-title">
        <h2>Patrocinadores</h2>
        <p>Conheça nossos Patrocinadores</p>
      </div>
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="#" target="_blank"><img src="fotos/Apposti.jpeg" class="img-fluid"
                alt="Patrocinador Apposti"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/ateliedamodamguacu/" target="_blank"><img
                src="fotos/Atelie_da_moda.jpeg" class="img-fluid" alt="Patrocinador Ateliê da Moda"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/auxiliumsolucoesemsaude/" target="_blank"><img
                src="fotos/Auxilium.jpg" class="img-fluid" alt="Patrocinador Auxilium"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/casa_tarr/" target="_blank"><img
                src="fotos/Casa_Taar.jpeg" class="img-fluid" alt="Patrocinador Casa Taar"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/certo.solucoes/" target="_blank"><img
                src="fotos/Certo.jpg" class="img-fluid" alt="Patrocinador Certo"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/revistacondominios/" target="_blank"><img
                src="fotos/Condominio.jpg" class="img-fluid" alt="Patrocinador Condomínio"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/consertasmart.mogi/" target="_blank"><img
                src="fotos/ConsertaSmart.png" class="img-fluid" alt="Patrocinador Conserta Smart"></a></div>

          <div class="swiper-slide"><a href="#clients" target="_blank"><img src="fotos/FAAJ.png"
                class="img-fluid" alt="Patrocinador FAAJ"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/flex.suplements/" target="_blank"><img
                src="fotos/FlexSuplementos.jpg" class="img-fluid" alt="Patrocinador Flex Suplementos"></a>
          </div>

          <div class="swiper-slide"><a href="https://www.instagram.com/frontdesigndigital/" target="_blank"><img
                src="fotos/FrontDesign.jpeg" class="img-fluid" alt="Patrocinador Front Design"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/semijoiasfurlann/" target="_blank"><img
                src="fotos/Furlann.jpeg" class="img-fluid" alt="Patrocinador Furlann"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/kleber_ecommerce/" target="_blank"><img
                src="fotos/Kleber.jpg" class="img-fluid" alt="Patrocinador Kleber"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/mariafourmigamogi/" target="_blank"><img
                src="fotos/MariaFourmiga.jpg" class="img-fluid" alt="Patrocinador Maria Fourmiga"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/netcelltecnologia/" target="_blank"><img
                src="fotos/NetCell.jpeg" class="img-fluid" alt="Patrocinador NetCell"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/padlock__store/" target="_blank"><img
                src="fotos/Padlock.jpg" class="img-fluid" alt="Patrocinador Padlock"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/petshomemogi/" target="_blank"><img
                src="fotos/PetHome.jpg" class="img-fluid" alt="Patrocinador Pet's Home"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/portaldacidademogimirim/" target="_blank"><img
                src="fotos/Portaldacidade.jpg" class="img-fluid" alt="Patrocinador Portal da Cidade"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/sandaliaria.mogimirim/" target="_blank"><img
                src="fotos/Sandaliaria.jpeg" class="img-fluid" alt="Patrocinador Sandaliaria"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/thainamartinsmodaintiima/" target="_blank"><img
                src="fotos/thaina.jpg" class="img-fluid" alt="Patrocinador Thaina"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/tiagoaugusto.fotografia/" target="_blank"><img
                src="fotos/TiagoFotografia.jpeg" class="img-fluid" alt="Patrocinador Tiago Fotografia"></a>
          </div>

          <div class="swiper-slide"><a href="https://www.instagram.com/worldled.ofc/" target="_blank"><img
                src="fotos/WorldLED.jpg" class="img-fluid" alt="Patrocinador World LED"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/evoxcommerce1/" target="_blank"><img
                src="fotos/evox.png" class="img-fluid" alt="Patrocinador Evox"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/acaidatiababa/" target="_blank"><img
                src="fotos/AcaidaBaba.png" class="img-fluid" alt="Patrocinador Açaí da Baba"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/confeccao_ms_/" target="_blank"><img
                src="fotos/ConfeccoesMS.jpeg" class="img-fluid" alt="Patrocinador Confecções MS"></a></div>

          <div class="swiper-slide"><a href="https://www.instagram.com/forcaseguranca/" target="_blank"><img
                src="fotos/Forcaeseguranca.png" class="img-fluid" alt="Patrocinador Força e Segurança"></a>
          </div>

          <div class="swiper-slide"><a href="https://www.instagram.com/leader.comunicacao/" target="_blank"><img
                src="fotos/Leader.png" class="img-fluid" alt="Patrocinador Leader"></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->

   <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Serviços</h2>
        <p>Veja os nossos serviços</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="#" target="_blank">Fotos</a>
            </h4>
            <p>Veja as fotos tiradas por nosso <a href="#team">Time de Midias Sociais</a></p>
            <span id="fotos">As fotos estarão disponíveis em breve...</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="https://www.instagram.com/escaperoom_expo/" target="_blank">Redes Sociais</a></h4>
            <p>Siga-nos nas Redes Sociais para mais informações</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="{{ route('relatorios.index') }}" target="_blank">Ranking</a></h4>
            <p>Veja o Ranking em Tempo Real do nosso Escape Room</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->
  
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Staff
        </h2>
        <p>Veja as pessoas por trás do Projeto</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/adriel.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/drielpastel/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Adriel Castiglioni</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/ana_beatriz.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/_abvieira/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Ana Beatriz</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/daniel.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/dani.eloliveira568/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Daniel Marques</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/davi.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/d._brandao/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Davi Brandão</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/diogo.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/dz.trem/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Diogo Roldan</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/djhon.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/debruin.djohn/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Djohannes Prado</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/eduardo.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/duh_lozano/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Eduardo Lozano</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/francisco.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/franciscoyuri_kk/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Francisco Yuri</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/gabriel.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/santana.davidd/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Gabriel David</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/gustavo.jpeg" class="img-fluid">
              <div class="social">
                <a href="https://www.instagram.com/guuhtoledo_/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Gustavo Toledo</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/isabela.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/isabela.zavarize/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Isabela Zavarize</h4>
              <span></span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/jadon.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/jadon.r.s.ramos/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Jadon Ryan</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/joao_rodrigo.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/jnrmarini/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>João Marini</h4>
            </div>
          </div>
        </div>

        <!--Abertura-->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/kauan.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/kaka_2008/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Kauan Matheus</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/matheus.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/matheusalmeidadelucena/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Matheus Lucena</h4>
            </div>
          </div>
        </div>

        <!--Abertura-->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/miguel.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/luekkkkj/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Miguel Souza</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/sophia.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="https://www.instagram.com/sophiageneroso_/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sophia Generoso</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
    
    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Contato</h2>
            <p>Contate-Nos</p>
          </div>

          <div>
            <iframe style="border:0; width: 100%; height: 270px;"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.118382524581!2d-46.956047327090836!3d-22.424569675701658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8f85011dea2dd%3A0x22b471946d92ea48!2sEscola%20T%C3%A9cnica%20Estadual%20Pedro%20Ferreira%20Alves!5e0!3m2!1spt-BR!2sbr!4v1697859708412!5m2!1spt-BR!2sbr"></iframe>
          </div>

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localização:</h4>
                  <p>Rua Ariovaldo Silveira Franco, 237 - Mirante, Mogi Mirim -SP</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>escaperoom.expo@gmail.com</p>
                </div>

            

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

      </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('relatorios.index') }}">Ranking</a></li>
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