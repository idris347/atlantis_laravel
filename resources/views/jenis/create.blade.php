@extends('kerangka')
@section('content')
<div class="panel-header bg-secondary-gradient">
    <div class="page-inner py-4">
      <div class="page-header text-white">
        <!-- judul halaman -->
        <h4 class="page-title text-white"><i class="fas fa-clone mr-2"></i> Jenis Barang</h4>
        <!-- breadcrumbs -->
        <ul class="breadcrumbs">
          <li class="nav-home"><a href="{{ route('home') }}"><i class="flaticon-home text-white"></i></a></li>
          <li class="separator"><i class="flaticon-right-arrow"></i></li>
          <li class="nav-item"><a href="{{ route('jenis') }}" class="text-white">Jenis Barang</a></li>
          <li class="separator"><i class="flaticon-right-arrow"></i></li>
          <li class="nav-item"><a>Entri</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="page-inner mt--5">
    <div class="card">
      <div class="card-header">
        <!-- judul form -->
        <div class="card-title">Entri Data Jenis Barang</div>
      </div>
      <!-- form entri data -->
      <form action="#" method="post" class="needs-validation" novalidate>
        <div class="card-body">
          <div class="form-group">
            <label>Jenis Barang <span class="text-danger">*</span></label>
            <input type="text" name="nama_jenis" class="form-control col-lg-5" autocomplete="off" required>
            <div class="invalid-feedback">Jenis barang tidak boleh kosong.</div>
          </div>
        </div>
        <div class="card-action">
          <!-- tombol simpan data -->
          <input type="submit" name="simpan" value="Simpan" class="btn btn-secondary btn-round pl-4 pr-4 mr-2">
          <!-- tombol kembali ke halaman data jenis barang -->
          <a href="{{ route('jenis') }}" class="btn btn-default btn-round pl-4 pr-4">Batal</a>
        </div>
      </form>
    </div>
  </div>
@endsection

