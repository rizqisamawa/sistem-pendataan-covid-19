<?php
use Illuminate\Support\Facades\DB;

  $odp = DB::table('odp')->count();
  $pdp = DB::table('pdp')->count();
  $positif = DB::table('positif')->count();

  $odpp = DB::table('odp')->get();
  $pdpp = DB::table('pdp')->get();
  $positifp = DB::table('positif')->get();

?>
@extends('tampilan')
@section('title','Sistem Informasi Covid-19 | Desa Pongangan')
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

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-success">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-black ">Orang Dalam Pemantauan (ODP)</span>
                      <span class="info-box-number text-center text-black mb-0">{{$odp}}</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-warning">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-light">Pasien Dalam Pengawasan (PDP)</span>
                      <span class="info-box-number text-center text-light mb-0">{{$pdp}}</span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-danger">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-black">Positif Covid-19</span>
                      <span class="info-box-number text-center text-black mb-0">{{$positif}}<span>
                    </span></span></div>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Detail Laporan Pemantauan Covid-19 di Desa Pongangan</h3>
                      <div class="card-tools">
                        <!-- <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed text-nowrap text-center">
                        <thead>
                          <tr>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Tanggal Konfirmasi</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($odpp as $odps)
                          <tr>
                              <td>{{$odps->usia}}</td>
                              <td>{{$odps->kelamin}}</td>
                              <td>{{$odps->alamat}}</td>
                              <td>{{$odps->tgl_konfirmasi}}</td>
                              <td>{{$odps->status}}</td>
                              <td>{{$odps->keterangan}}</td>
                          </tr>
                         @endforeach
                        @foreach($pdpp as $pdps)
                          <tr>
                              <td>{{$pdps->usia}}</td>
                              <td>{{$pdps->kelamin}}</td>
                              <td>{{$pdps->alamat}}</td>
                              <td>{{$pdps->tgl_konfirmasi}}</td>
                              <td>{{$pdps->status}}</td>
                              <td>{{$pdps->keterangan}}</td>
                          </tr>
                         @endforeach
                        @foreach($positifp as $pp)
                          <tr>
                              <td>{{$pp->usia}}</td>
                              <td>{{$pp->kelamin}}</td>
                              <td>{{$pp->alamat}}</td>
                              <td>{{$pp->tgl_konfirmasi}}</td>
                              <td>{{$pp->status}}</td>
                              <td>{{$pp->keterangan}}</td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Info!</h5>
                    DATA DAPAT BISA BERUBAH SEWAKTU - WAKTU.
                  </div>
                </div>

                <a id="back-to-top" href="" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                  <i class="fas fa-chevron-up"></i>
                </a>
                
        </div>
      </div>
    </div>

    <!-- /.content -->
    @endsection