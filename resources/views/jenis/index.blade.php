@extends('kerangka')
@section('content')
<div class="panel-header bg-secondary-gradient">
    <div class="page-inner py-45">
      <div class="d-flex align-items-left align-items-md-top flex-column flex-md-row">
        <div class="page-header text-white">
          <!-- judul halaman -->
          <h4 class="page-title text-white"><i class="fas fa-clone mr-2"></i> Jenis Barang</h4>
          <!-- breadcrumbs -->
          <ul class="breadcrumbs">
            <li class="nav-home"><a href="{{ route('home') }}"><i class="flaticon-home text-white"></i></a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="{{ route('jenis') }}" class="text-white">Jenis Barang</a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a>Data</a></li>
          </ul>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
          <!-- tombol entri data -->
          <a href="{{ route('jenis.create') }}" class="btn btn-secondary btn-round mr-2">
            <span class="btn-label"><i class="fa fa-plus mr-2"></i></span> Entri Data
          </a>
          <!-- tombol export data -->
          <a href="modules/jenis/export.php" class="btn btn-success btn-round">
            <span class="btn-label"><i class="fa fa-file-excel mr-2"></i></span> Export
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="page-inner mt--5">
    <div class="card">
      <div class="card-header">
        <!-- judul tabel -->
        <div class="card-title">Data Jenis Barang</div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <!-- tabel untuk menampilkan data dari database -->
          <table id="basic-datatables" class="display table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Jenis Barang</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
                              <!-- tampilkan data -->
                <tr>
                  <td width="30" class="text-center">1</td>
                  <td width="300">da</td>
                  <td width="70" class="text-center">
                    <div>
                      <!-- tombol ubah data -->
                      <a href="?module=form_ubah_jenis&id=1" class="btn btn-icon btn-round btn-secondary btn-sm mr-md-1" data-toggle="tooltip" data-placement="top" title="Ubah">
                        <i class="fas fa-pencil-alt fa-sm"></i>
                      </a>
                      <!-- tombol hapus data -->
                      <a href="modules/jenis/proses_hapus.php?id=1" onclick="return confirm('Anda yakin ingin menghapus data jenis barang da?')" class="btn btn-icon btn-round btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                        <i class="fas fa-trash fa-sm"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                          </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection

