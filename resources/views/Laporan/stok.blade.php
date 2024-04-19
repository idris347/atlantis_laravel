@extends('kerangka')
@section('content')
<div class="panel-header bg-secondary-gradient">
    <div class="page-inner py-4">
      <div class="page-header text-white">
        <!-- judul halaman -->
        <h4 class="page-title text-white"><i class="fas fa-file-signature mr-2"></i> Laporan Stok</h4>
        <!-- breadcrumbs -->
        <ul class="breadcrumbs">
          <li class="nav-home"><a href="{{ route('home') }}"><i class="flaticon-home text-white"></i></a></li>
          <li class="separator"><i class="flaticon-right-arrow"></i></li>
          <li class="nav-item"><a>Laporan</a></li>
          <li class="separator"><i class="flaticon-right-arrow"></i></li>
          <li class="nav-item"><a>Stok</a></li>
        </ul>
      </div>
    </div>
  </div>

      <div class="page-inner mt--5">
      <div class="card">
        <div class="card-header">
          <!-- judul form -->
          <div class="card-title">Filter Data Stok</div>
        </div>
        <!-- form filter data -->
        <div class="card-body">
          <form action="?module=laporan_stok" method="post" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <label>Stok <span class="text-danger">*</span></label>
                  <select name="stok" class="form-control chosen-select" autocomplete="off" required>
                    <option selected disabled value="">-- Pilih --</option>
                    <option value="Seluruh">Seluruh</option>
                    <option value="Minimum">Minimum</option>
                  </select>
                  <div class="invalid-feedback">Stok tidak boleh kosong.</div>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="form-group pt-3">
                  <!-- tombol tampil data -->
                  <input type="submit" name="tampil" value="Tampilkan" class="btn btn-secondary btn-round btn-block mt-4">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection