  <html>
  <head>
  <!-- Title -->
  <title>Aplikasi Persediaan Barang Gudang Material dengan PHP 8 dan MySQLi</title>

  <!-- Favicon icon -->
  <link rel="icon" href="{{ asset('assets') }}/img/favicon.png" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="{{ asset('assets') }}/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['{{ asset('assets') }}/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/atlantis.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/login.css">
</head>

<body class="login">
  <div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
      <!-- logo -->
      <div class="text-center mb-4"><img src="{{ asset('assets') }}/img/logo.png" alt="Logo" width="95px"></div>
      <!-- judul -->
      <h3 class="text-center">Aplikasi Persediaan Barang <br>Gudang Material</h3>
      <!-- form login -->
      <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
        @csrf
        <div class="form-group form-floating-label">
          <div class="user-icon"><i class="fas fas fa-user"></i></div>
          <input type="email" id="email" name="email" class="form-control input-border-bottom" autocomplete="off" required>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
          <label for="email" class="placeholder">email</label>
          <div class="invalid-feedback">email tidak boleh kosong.</div>
        </div>

        <div class="form-group form-floating-label">
          <div class="user-icon"><i class="fas fa-lock"></i></div>
          <div class="show-password"><i class="flaticon-interface"></i></div>
          <input type="password" id="password" name="password" class="form-control input-border-bottom" autocomplete="off" required>
          <label for="password" class="placeholder">Password</label>
          <div class="invalid-feedback">Password tidak boleh kosong.</div>
        </div>
        <div class="form-action mt-2">
          <!-- tombol login -->
          <input type="submit" name="login" value="LOGIN" class="btn btn-secondary btn-rounded btn-login btn-block">
        </div>
        <!-- footer -->
        <div class="login-footer mt-4">
          <span class="msg">&copy; Muhammad Idris assyafei - 2024</span>
         </div>
      </form>
    </div>
  </div>
  <script src="{{ asset('assets') }}/js/core/jquery.3.2.1.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="{{ asset('assets') }}/js/ready.js"></script>
  <script src="{{ asset('assets') }}/js/form-validation.js"></script>
</body>

</html>