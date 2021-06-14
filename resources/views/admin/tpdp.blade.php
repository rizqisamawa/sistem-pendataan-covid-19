@extends('tampilan2')
@section('title','Tambah Data Laporan PDP Covid-19')
@section('content')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
      
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
<!-- pdp -->
        <div class="col-lg-4">
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Tambah Data PDP</h3>
              </div>

              <form role="form" method="post" action="/tpdp/pdp">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usia</label>
                    <input name="usia" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Usia">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelamin</label>
                    <select class="form-control" id="exampleInputPassword1" name="kelamin">
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Konfirmasi</label>
                    <input name="tgl_konfirmasi" type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" id="exampleInputPassword1" name="status">
                      <option value="PDP">PDP</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <select class="form-control" id="exampleInputPassword1" name="keterangan">
                      <option value="Dalam Pemantuan">Dalam Pemantuan</option>
                      <option value="Selesai Pemantuan">Selesai Pemantuan</option>
                      <option value="Sembuh">Sembuh</option>
                      <option value="Meninggal">Meninggal</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data PDP</h3>
                <div class="card-tools">
              <a href="/tpdp/pdpexport" class="btn btn-sm btn-primary">Download Data</a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Usia</th>
                      <th>Kelamin</th>
                      <th>Alamat</th>
                      <th>Tgl Konfirmasi</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $pdp as $pdps)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pdps->nama}}</td>
                        <td>{{$pdps->usia}}</td>
                        <td>{{$pdps->kelamin}}</td>
                        <td>{{$pdps->alamat}}</td>
                        <td>{{$pdps->tgl_konfirmasi}}</td>
                        <td>{{$pdps->status}}</td>
                        <td>{{$pdps->keterangan}}</td>
                        <td>
                          <a href="/tpdp/hpdp/{{$pdps->id}}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
<!-- pdp -->

        </div>
      </div>
    </div>
@endsection