<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <!-- data user login -->
        <div class="user">
          <div class="avatar-sm float-left mr-2">
            <img src="{{ asset('assets') }}/img/avatar-2.png" alt="image profile" class="avatar-img rounded-circle">
          </div>
          <div class="info">
            <a>
              <span>
                Admin  <span class="user-level">Administrator</span>
              </span>
            </a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="nav nav-secondary">

          <!-- panggil file "sidebar_menu.php" untuk menampilkan menu -->
          <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
      <i class="fas fa-home"></i>
      <p>Dashboard</p>
    </a>
  </li>
      <li class="nav-section">
    <span class="sidebar-mini-icon">
      <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Master</h4>
  </li>

  <li class="nav-item {{ request()->is('jenis*') || request()->is('barang*') && !request()->routeIs('barang_masuk*') && !request()->routeIs('barang_keluar*') || request()->is('satuan*') ? 'active' : '' }}">
    <a data-toggle="collapse" href="#barang">
      <i class="fas fa-clone"></i>
      <p>Barang</p>
      <span class="caret"></span>
    </a>
    <div class="collapse" id="barang">
      <ul class="nav nav-collapse">
        <li>
          <a href="{{ route('barang') }}">
            <span class="sub-item">Data Barang</span>
          </a>
        </li>
        <li>
          <a href="{{ route('jenis') }}">
            <span class="sub-item">Jenis Barang</span>
          </a>
        </li>
        <li>
          <a href="{{ route('satuan') }}">
            <span class="sub-item">Satuan</span>
          </a>
        </li>
      </ul>
    </div>
</li>
      <li class="nav-section">
    <span class="sidebar-mini-icon">
      <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Transaksi</h4>
  </li>

  <li class="nav-item {{ request()->routeIs('barang_masuk*') ? 'active' : '' }}">
    <a href="{{ route('barang_masuk') }}">
      <i class="fas fa-sign-in-alt"></i>
      <p>Barang Masuk</p>
    </a>
  </li>
  <li class="nav-item {{ request()->routeIs('barang_keluar*') ? 'active' : '' }}">
    <a href="{{ route('barang_keluar') }}">
      <i class="fas fa-sign-out-alt"></i>
      <p>Barang Keluar</p>
    </a>
  </li>
      <li class="nav-section">
    <span class="sidebar-mini-icon">
      <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Laporan</h4>
  </li>

  <li class="nav-item {{ request()->routeIs('laporan_stok*') ? 'active' : '' }}">
    <a href="{{ route('laporan_stok') }}">
      <i class="fas fa-file-signature"></i>
      <p>Laporan Stok</p>
    </a>
  </li>
      <li class="nav-item {{ request()->routeIs('laporan_masuk*') ? 'active' : '' }}">
    <a href="{{ route('laporan_masuk') }}">
      <i class="fas fa-file-import"></i>
      <p>Laporan Barang Masuk</p>
    </a>
  </li>
      <li class="nav-item {{ request()->routeIs('laporan_keluar*') ? 'active' : '' }}">
    <a href="{{ route('laporan_keluar') }}">
      <i class="fas fa-file-export"></i>
      <p>Laporan Barang Keluar</p>
    </a>
  </li>
      <li class="nav-section">
    <span class="sidebar-mini-icon">
      <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Pengaturan</h4>
  </li>

  <li class="nav-item {{ request()->routeIs('user*') ? 'active' : '' }}">
    <a href="{{ route('user') }}">
      <i class="fas fa-user"></i>
      <p>Manajemen User</p>
    </a>
  </li>
        </ul>
      </div>
    </div>
  </div>