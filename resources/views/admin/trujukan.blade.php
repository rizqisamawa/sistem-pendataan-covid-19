@extends('tampilan2')
@section('title','Tambah Data Rumah Sakit Rujukan')
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

        <div class="col-lg-4">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Rumah Sakit Rujukan</h3>
              </div>

              <form role="form" method="post" action="/trujukan/prujukan">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rumah Sakit</label>
                    <input name="nama_rs" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Rumah Sakit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input name="alamat" ype="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telepon</label>
                    <input name="nomor" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nomor Telepon">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
          </div>
        </div>

        <div class="col-lg-8">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Rumah Sakit Rujukan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama RS</th>
                      <th>Alamat</th>
                      <th>No Telepon</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $rs as $rsr)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$rsr->nama_rs}}</td>
                        <td>{{$rsr->alamat}}</td>
                        <td>{{$rsr->nomor}}</td>
                        <td>
                          <a href="/trujukan/hrs/{{$rsr->id}}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>

        </div>
      </div>
    </div>
@endsection