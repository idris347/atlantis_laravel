@extends('kerangka')
@section('content')
<div class="panel-header bg-secondary-gradient">
    <div class="page-inner py-45">
      <div class="d-flex align-items-left align-items-md-top flex-column flex-md-row">
        <div class="page-header text-white">
          <!-- judul halaman -->
          <h4 class="page-title text-white"><i class="fas fa-user mr-2"></i> Manajemen User</h4>
          <!-- breadcrumbs -->
          <ul class="breadcrumbs">
            <li class="nav-home"><a href="{{ route('home') }}"><i class="flaticon-home text-white"></i></a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a href="{{ route('user') }}" class="text-white">User</a></li>
            <li class="separator"><i class="flaticon-right-arrow"></i></li>
            <li class="nav-item"><a>Data</a></li>
          </ul>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
          <!-- tombol entri data -->
          <a href="{{ route('user.create') }}" class="btn btn-secondary btn-round mr-2">
            <span class="btn-label"><i class="fa fa-plus mr-2"></i></span> Entri Data
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="page-inner mt--5">
    <div class="card">
      <div class="card-header">
        <!-- judul tabel -->
        <div class="card-title">Data User</div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <!-- tabel untuk menampilkan data dari database -->
          <table id="basic-datatables" class="display table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Nama User</th>
                <th class="text-center">Username</th>
                <th class="text-center">Hak Akses</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
                              <!-- tampilkan data -->
                <tr>
                  <td width="30" class="text-center">1</td>
                  <td width="180">Kepala Gudang</td>
                  <td width="180">kepala gudang</td>
                  <td width="100">Kepala Gudang</td>
                  <td width="70" class="text-center">
                    <div>
                      <!-- tombol ubah data -->
                      <a href="?module=form_ubah_user&id=3" class="btn btn-icon btn-round btn-secondary btn-sm mr-md-1" data-toggle="tooltip" data-placement="top" title="Ubah">
                        <i class="fas fa-pencil-alt fa-sm"></i>
                      </a>
                      <!-- tombol hapus data -->
                      <a href="modules/user/proses_hapus.php?id=3" onclick="return confirm('Anda yakin ingin menghapus data user dengan username kepala gudang?')" class="btn btn-icon btn-round btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                        <i class="fas fa-trash fa-sm"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                              <!-- tampilkan data -->
                <tr>
                  <td width="30" class="text-center">2</td>
                  <td width="180">Admin Gudang</td>
                  <td width="180">admin gudang</td>
                  <td width="100">Admin Gudang</td>
                  <td width="70" class="text-center">
                    <div>
                      <!-- tombol ubah data -->
                      <a href="?module=form_ubah_user&id=2" class="btn btn-icon btn-round btn-secondary btn-sm mr-md-1" data-toggle="tooltip" data-placement="top" title="Ubah">
                        <i class="fas fa-pencil-alt fa-sm"></i>
                      </a>
                      <!-- tombol hapus data -->
                      <a href="modules/user/proses_hapus.php?id=2" onclick="return confirm('Anda yakin ingin menghapus data user dengan username admin gudang?')" class="btn btn-icon btn-round btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                        <i class="fas fa-trash fa-sm"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                              <!-- tampilkan data -->
                <tr>
                  <td width="30" class="text-center">3</td>
                  <td width="180">Admin</td>
                  <td width="180">administrator</td>
                  <td width="100">Administrator</td>
                  <td width="70" class="text-center">
                    <div>
                      <!-- tombol ubah data -->
                      <a href="?module=form_ubah_user&id=1" class="btn btn-icon btn-round btn-secondary btn-sm mr-md-1" data-toggle="tooltip" data-placement="top" title="Ubah">
                        <i class="fas fa-pencil-alt fa-sm"></i>
                      </a>
                      <!-- tombol hapus data -->
                      <a href="modules/user/proses_hapus.php?id=1" onclick="return confirm('Anda yakin ingin menghapus data user dengan username administrator?')" class="btn btn-icon btn-round btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
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

