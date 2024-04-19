<!DOCTYPE html>
<html lang="en">
@include('layout.style')
<body>
  @include('sweetalert::alert')
  <div class="wrapper">
    @include('layout.navbar')
    <!-- Sidebar -->
      @include('layout.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
      <!-- Main Content -->
    <div class="content">
      @yield('content')
    </div>
      <!-- End Main Content -->
      <!-- Footer -->
    @include('layout.footer')
      <!-- End Footer -->
    </div>
  </div>
  <!-- Modal Logout -->
  @include('layout.logout')
 @include('layout.script')
</body>
</html>
