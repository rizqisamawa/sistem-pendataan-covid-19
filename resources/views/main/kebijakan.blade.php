@extends('tampilan')
@section('title','Kebijakan Pemerintah')
@section('content')

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kebijakan Pemerintah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Kebijakan Pemerintah</li>
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
                      <th style="width: 130px">Tanggal</th>
                      <th>Surat</th>
                      <th>Perihal</th>
                      <th>Unduh</th>
                    </tr>
                  </thead>
                    <tbody>
                    <tr>
                            <td>1.</td>
                            <td>27 Mei 2020</td>
                            <td>Keputusan Menteri Dalam Negeri No.440-830 Tahun 2020</td>
                            <td>PERUBAHAN TATANAN NORMAL ABRU PRODUKTIF DAN AMAN CORONA VIRUS DISEASE 2019 BAGI APARATUR SIPILI NEGARA DI LINGKUNGAN KEMENTERIAN DALAM NEGERI DAN PEMERINTAH DAERAH</td>
                            <td class="uael-table-col elementor-repeater-item-479ba4d" data-title="Unduh">
                            <a href="/adminlte/kebijakan/KEPMENDAGRI-TENTANG-PEDOMAN-TATANAN-NORMAL-BARU.pdf">
                                <span class="uael-table__text">
                                <span class="uael-align-icon--left"> <i aria-hidden="true" class="fas fa-file-download"></i></span>
                                <span class="uael-table__text-inner">Unduh PDF</span>
                                </span>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>29 Mei 2020</td>
                            <td>Keputusan Bupati No.800/894/437.73/2020</td>
                            <td>Perubahan Keempat Penyesuaian Sistem Kerja ASN di Lingkungan Pemerintah Kabupaten Gresik</td>
                            <td class="uael-table-col elementor-repeater-item-479ba4d" data-title="Unduh">
                            <a href="/adminlte/kebijakan/PERPANJANGAN-4-WFH.pdf">
                                <span class="uael-table__text">
                                <span class="uael-align-icon--left"> <i aria-hidden="true" class="fas fa-file-download"></i></span>
                                <span class="uael-table__text-inner">Unduh PDF</span>
                                </span>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>11 Juni 2020</td>
                            <td>Keputusan Bupati No. 22 Tahun 2020</td>
                            <td>PEDOMAN MASA TRANSISI MENUJU TATANAN NORMAL BARU PADA KONDISI PANDEMI CORONA VIRUS DISEASE 2019 (COVID-19) DI KABUPATEN GRESIK</td>
                            <td class="uael-table-col elementor-repeater-item-479ba4d" data-title="Unduh">
                            <a href="/adminlte/kebijakan/PERBUP_22_2020-Pedoman-Masa-Transisi-New-Normal.pdf">
                                <span class="uael-table__text">
                                <span class="uael-align-icon--left"> <i aria-hidden="true" class="fas fa-file-download"></i></span>
                                <span class="uael-table__text-inner">Unduh PDF</span>
                                </span>
                            </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
       </div>
    </div>

@endsection