@extends('tampilan')
@section('title','Edukasi Pembelajaran Covid-19')
@section('content')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edukasi Pembelajaran Covid-19</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Edukasi</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="card card-orange">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Etika Batuk untuk Cegah Penularan Covid-19</h3>
                    </div>
                    <div class="card-body">
                        <video width="310px" height="300px" controls>
                            <source src="/adminlte/video/etika.mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-pink">
                    <div class="card-header">
                        <h3 class="card-title">6 Langkah Cuci Tangan untuk Cegah Covid-19</h3>
                    </div>
                    <div class="card-body">
                        <video width="310px" height="300px" controls>
                            <source src="/adminlte/video/langkah.mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">7 Langkah Pencegahan Diri Dari Covid-19</h3>
                    </div>
                    <div class="card-body">
                        <video width="310px" height="300px" controls>
                            <source src="/adminlte/video/cegah.mp4">
                        </video>
                    </div>
                </div>
            </div>

            

        </div>
       </div>
    </div>

@endsection