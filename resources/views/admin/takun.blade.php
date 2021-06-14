@extends('tampilan2')
@section('title','Tambah Data Akun')
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

        <div class="col-lg-8">
          <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Akun</h3>
              </div>

              <form role="form" method="post" action="/takun/postakun">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                </div>
              </form>
          </div>
        </div>

        </div>
      </div>
    </div>

@endsection