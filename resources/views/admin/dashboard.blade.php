@extends('app  ')

@section('content')

  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-bold mb-0">Dashboard</h4>
          <p class="text-muted mb-0">Selamat datang di Sistem Informasi SMAN 5 Tasikmalaya</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-1">Total Siswa</p>
              <h3 class="font-weight-bold mb-0">{{ $totalSiswa ?? 0 }}</h3>
            </div>
            <div class="icon icon-box-success">
              <span class="mdi mdi-account-school mdi-36px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-1">Total Guru</p>
              <h3 class="font-weight-bold mb-0">{{ $totalGuru ?? 0 }}</h3>
            </div>
            <div class="icon icon-box-primary">
              <span class="mdi mdi-account-tie mdi-36px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-1">Total Berita</p>
              <h3 class="font-weight-bold mb-0">{{ $totalBerita ?? 0 }}</h3>
            </div>
            <div class="icon icon-box-warning">
              <span class="mdi mdi-newspaper mdi-36px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-1">Ekstrakurikuler</p>
              <h3 class="font-weight-bold mb-0">{{ $totalEkstrakulikuler ?? 0 }}</h3>
            </div>
            <div class="icon icon-box-danger">
              <span class="mdi mdi-school mdi-36px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Selamat Datang</h4>
          <p class="card-description">
            Sistem Informasi SMAN 5 Tasikmalaya
          </p>

          <div class="row">
            <div class="col-md-12">
              <p>
                Selamat datang di halaman administrator Sistem Informasi
                SMAN 5 Tasikmalaya. Melalui halaman ini administrator dapat
                mengelola data sekolah, siswa, guru, berita, galeri,
                dan ekstrakurikuler.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Menu Admin</h4>

          <div class="d-flex align-items-center mb-3">
            <i class="mdi mdi-account-school mdi-24px mr-3 text-primary"></i>
            <span>Data Siswa</span>
          </div>

          <div class="d-flex align-items-center mb-3">
            <i class="mdi mdi-account-tie mdi-24px mr-3 text-success"></i>
            <span>Data Guru</span>
          </div>

          <div class="d-flex align-items-center mb-3">
            <i class="mdi mdi-newspaper mdi-24px mr-3 text-warning"></i>
            <span>Berita Sekolah</span>
          </div>

          <div class="d-flex align-items-center">
            <i class="mdi mdi-image-multiple mdi-24px mr-3 text-danger"></i>
            <span>Galeri Sekolah</span>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
