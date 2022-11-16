@extends('template.master')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Siswa</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
    </div>
    </section>
@endsection


@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="InputNIS" placeholder="Enter Nomor Induk Siswa">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="InputNama" placeholder="Enter Nama Siswa">
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputAlamat">Alamat Siswa</label>
                    <input type="text" name="alamat" class="form-control" id="InputAlamat" placeholder="Enter Alamat Siswa">
                  </div>
                  <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
