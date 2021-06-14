@extends('tampilan')
@section('title','Rumah Sakit Rujukan')
@section('content')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rumah Sakit Rujukan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">RS Rujukan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Rumah Sakit</th>
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
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
       </div>
    </div>
@endsection