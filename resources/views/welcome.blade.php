<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Landing</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/templatemo-digital-trend.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="{{ asset('landing') }}/index.html">
          <i class="fa fa-line-chart"></i>
          Gudang Material
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#Home" class="nav-link smoothScroll">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link smoothScroll">About</a>
            </li>
            <li class="nav-item">
              <a href="#idrs" class="nav-link smoothScroll">Contact</a>
            </li>
            <li class="nav-item">
                @if (Route::has('login'))
                    @auth
                    <a href="{{ route('home') }}" class="nav-link contact">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="nav-link contact">Login</a>
                    @endauth
            @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- close navbar -->
    <!-- hero -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center" id="Home">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center"
          >
            <div class="hero-text">
              <h1 class="text-white" data-aos="fade-up">
                We are ready for your digital marketing
              </h1>

              <a
                href="{{ asset('landing') }}/contact.html"
                class="custom-btn btn-bg btn mt-3"
                data-aos="fade-up"
                data-aos-delay="100"
                >Let us discuss together!</a
              >

              <strong
                class="d-block py-3 pl-5 text-white"
                data-aos="fade-up"
                data-aos-delay="200"
                ><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong
              >
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
              <img
                src="{{ asset('landing') }}/images/working-girl.png"
                class="img-fluid"
                alt="working girl"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- close hero -->
    <!-- about -->
    <section class="about section-padding pb-0" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto col-md-10 col-12">
            <div class="about-info">
              <h2 class="mb-4" data-aos="fade-up">
                the best <strong>Digital Marketing agency</strong> in Rio de
                Janeiro
              </h2>

              <p class="mb-0" data-aos="fade-up">
                Total 5 HTML pages are included in this template from TemplateMo
                website. Please check 2 <a href="{{ asset('landing') }}/blog.html">blog</a> pages,
                <a href="{{ asset('landing') }}/project-detail.html">project</a> page, and
                <a href="{{ asset('landing') }}/contact.html">contact</a> page. <br /><br />You are
                <strong>allowed</strong> to use this template for commercial or
                non-commercial purpose. You are NOT allowed to redistribute the
                template ZIP file on template collection websites.
              </p>
            </div>

            <div class="about-image" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('landing') }}/images/office.png" class="img-fluid" alt="office" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- close about -->
    <!-- footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mx-lg-auto col-md-8 col-10" id="idrs">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
              We make creative <strong>brands</strong> only.
            </h1>
          </div>
          <div
            class="col-lg-3 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h4 class="my-4">Contact Info</h4>
            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i>
              +99 080 070 4224
            </p>
            <p>
              <a href="{{ asset('landing') }}/#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>
          <div
            class="col-lg-3 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <h4 class="my-4">Our Studio</h4>
            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i>
              Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
            </p>
          </div>
          <div
            class="col-lg-4 mx-lg-auto text-center col-md-8 col-12"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <p class="copyright-text">
              Copyright &copy; 2020 Your Company
              <br />
              <a rel="nofollow noopener" href="{{ asset('landing') }}/https://templatemo.com"
                >Design: TemplateMo</a
              >
            </p>
          </div>
          <div
            class="col-lg-4 mx-lg-auto col-md-6 col-12"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <ul class="footer-link">
              <li><a href="{{ asset('landing') }}/#">Stories</a></li>
              <li><a href="{{ asset('landing') }}/#">Work with us</a></li>
              <li><a href="{{ asset('landing') }}/#">Privacy</a></li>
            </ul>
          </div>
          <div
            class="col-lg-3 mx-lg-auto col-md-6 col-12"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <ul class="social-icon">
              <li><a href="{{ asset('landing') }}/#" class="fa fa-instagram"></a></li>
              <li><a href="{{ asset('landing') }}/#" class="fa fa-twitter"></a></li>
              <li><a href="{{ asset('landing') }}/#" class="fa fa-dribbble"></a></li>
              <li><a href="{{ asset('landing') }}/#" class="fa fa-behance"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- close footer -->
    <script src="{{ asset('landing') }}/js/jquery.min.js"></script>
    <script src="{{ asset('landing') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('landing') }}/js/aos.js"></script>
    <script src="{{ asset('landing') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('landing') }}/js/smoothscroll.js"></script>
    <script src="{{ asset('landing') }}/js/custom.js"></script>
  </body>
</html>
