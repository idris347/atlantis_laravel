@extends('kerangka')
@section('content')
@if(session('login_success'))
<div class="alert alert-notify alert-secondary alert-dismissible fade show" role="alert">
 <span data-notify="icon" class="fas fa-user-alt"></span> 
 <span data-notify="title" class="text-secondary">Hi! Admin</span> 
 <span data-notify="message">{{ session('login_success') }}</span>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>
@endif
<div class="panel-header bg-secondary-gradient">
<div class="page-inner py-5">
<div class="d-flex align-items-left align-items-md-top flex-column flex-md-row">
<div class="page-header text-white">
<!-- judul halaman -->
<h4 class="page-title text-white"><i class="fas fa-home mr-2"></i> Dashboard</h4>
</div>
</div>
</div>
</div>
<div class="page-inner mt--5">
<div class="row row-card-no-pd mt--2">
<!-- menampilkan informasi jumlah data barang -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
<div class="card-body ">
  <div class="row">
    <div class="col-5">
      <div class="icon-big2 text-center">
        <i class="flaticon-box-2 text-secondary"></i>
      </div>
    </div>
    <div class="col-7 col-stats">
      <div class="numbers">
        <p class="card-category">Data Barang</p>
                          <!-- tampilkan data -->
        <h4 class="card-title">0</h4>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- menampilkan informasi jumlah data barang masuk -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
<div class="card-body ">
  <div class="row">
    <div class="col-5">
      <div class="icon-big2 text-center">
        <i class="flaticon-inbox text-success"></i>
      </div>
    </div>
    <div class="col-7 col-stats">
      <div class="numbers">
        <p class="card-category">Data Barang Masuk</p>
                          <!-- tampilkan data -->
        <h4 class="card-title">0</h4>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- menampilkan informasi jumlah data barang keluar -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
<div class="card-body">
  <div class="row">
    <div class="col-5">
      <div class="icon-big2 text-center">
        <i class="flaticon-archive text-warning"></i>
      </div>
    </div>
    <div class="col-7 col-stats">
      <div class="numbers">
        <p class="card-category">Data Barang Keluar</p>
                          <!-- tampilkan data -->
        <h4 class="card-title">0</h4>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- tampilkan informasi jumlah data jenis barang, satuan, dan user -->
<div class="row">
<!-- menampilkan informasi jumlah data jenis barang -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
  <div class="card-body ">
    <div class="row align-items-center">
      <div class="col-icon">
        <div class="icon-big text-center icon-warning bubble-shadow-small">
          <i class="fas fa-clone"></i>
        </div>
      </div>
      <div class="col col-stats ml-3 ml-sm-0">
        <div class="numbers">
          <p class="card-category">Data Jenis Barang</p>
                              <!-- tampilkan data -->
          <h4 class="card-title">0</h4>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- menampilkan informasi jumlah data satuan -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col-icon">
        <div class="icon-big text-center icon-info bubble-shadow-small">
          <i class="fas fa-folder-open"></i>
        </div>
      </div>
      <div class="col col-stats ml-3 ml-sm-0">
        <div class="numbers">
          <p class="card-category">Data Satuan</p>
                              <!-- tampilkan data -->
          <h4 class="card-title">0</h4>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- menampilkan informasi jumlah data user -->
<div class="col-sm-12 col-md-4">
<div class="card card-stats card-round">
  <div class="card-body">
    <div class="row align-items-center">
      <div class="col-icon">
        <div class="icon-big text-center icon-success bubble-shadow-small">
          <i class="fas fa-user-circle"></i>
        </div>
      </div>
      <div class="col col-stats ml-3 ml-sm-0">
        <div class="numbers">
          <p class="card-category">Data User</p>
                              <!-- tampilkan data -->
          <h4 class="card-title">3</h4>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<hr class="mt-1 pb-2">

<!-- menampilkan informasi stok barang yang telah mencapai batas minimum -->
<div class="card">
<div class="card-header">
<!-- judul tabel -->
<div class="card-title"><i class="fas fa-info-circle mr-2"></i> Stok barang telah mencapai batas minimum</div>
</div>
<div class="card-body">
<div class="table-responsive">
<!-- tabel untuk menampilkan data dari database -->
<table id="basic-datatables" class="display table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">No.</th>
      <th class="text-center">ID Barang</th>
      <th class="text-center">Nama Barang</th>
      <th class="text-center">Jenis Barang</th>
      <th class="text-center">Stok</th>
      <th class="text-center">Satuan</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
