@extends('tampilan')
@section('title','Tentang Covid-19')
@section('content')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tentang Covid-19</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Tentang Covid-19</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Apa Yang Harus Di Ketahui ?</h5>
              </div>
              <div class="card-body">
                <video width="310px" height="300px" controls>
                    <source src="/adminlte/video/covid.mp4">
                </video>
                <p class="card-text">
                    Corona Virus Disease 2019 atau COVID-19 adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis korona virus. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernafas.
                </p>
                <p class="card-text">
                    Infeksi menyebar dari satu orang ke orang lain melalui percikan (droplet) dari saluran pernapasan yang sering dihasilkan saat batuk atau bersin. Jarak jangkauan droplet biasanya hingga 1 meter. Droplet bisa menempel di benda, namun tidak akan bertahan lama di udara. Waktu dari paparan virus hingga timbulnya gejala klinis antara 1-14 hari dengan rata-rata 5 hari. Maka, bagi orang yang sedang sakit diwajibkan memakai masker guna meminimalisir penyebaran droplet.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Apa itu Covid-19</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Pneumonia Coronavirus Disease 2019 atau COVID-19 adalah penyakit peradangan paru yang disebabkan oleh Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Bagaimana Covid-19 Menular</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Cara penularan SARS-CoV-2 penyebab COVID-19 ialah melalui kontak dengan droplet saluran napas penderita. Droplet merupakan partikel kecil dari mulut penderita yang mengandung kuman penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara. Droplet dapat melewati sampai jarak tertentu (biasanya 1 meter). Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau bersin. Namun, partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di udara dalam waktu yang lama. Oleh karena itu, orang yang sedang sakit, diwajibkan untuk menggunakan masker untuk mencegah penyebaran droplet. Untuk penularan melalui makanan, sampai saat ini belum ada bukti ilmiahnya</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

@endsection