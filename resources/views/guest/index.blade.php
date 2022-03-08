@extends('guest.layouts.main')

@section('content')
    
  <!-- Jumbotron -->
  <section class="jumbotron1 d-flex">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h1 class="jumbotron1-header">SMARTHYDROPONIC</h1>
          <p class="jumbotron1-lead">A SMART WAY FOR GROWING MORE PLANTS</p>
          <a href="/monitoring" class="jumbotron1-button d-block">Live Monitoring</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Hidroponik Bagian 2 Slide 1 -->
  <section id="home">
    <div class="container">
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide px-5" id="firstSlide">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <img src="../img/hydroponics-1.jpg" class="gambar-bagian2" alt="hydroponics-1" />
              </div>
              <div class="col-md-6">
                <h2 class="judul-bagian2">
                  APA ITU <br />
                  HIDROPONIK?
                </h2>
                <p class="paragraf">
                  Sistem hidroponik yaitu sistem budidaya menggunakan air yang
                  mengandung nutrisi dan mineral tanpa menggunakan tanah
                  sebagai media tanam. Sistem ini memiliki proses pemeliharaan
                  yang mudah dan ramah lingkungan dibandingkan sistem
                  konvensional.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide px-5" id="secondSlide">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <img src="../img/hydroponics-1.jpg" class="gambar-bagian2" alt="hydroponics-1" />
              </div>
              <div class="col-md-6">
                <h2 class="judul-bagian2">
                  KENAPA HARUS <br />
                  HIDROPONIK?
                </h2>
                <table class="table1">
                  <tr>
                    <th>
                      Karena menanam tanaman dengan sistem hidroponik memiliki
                      beberapa keuntungan seperti:
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <i class="bi bi-check2-circle"></i> Tidak membutuhkan
                      lahan luas
                    </td>
                  </tr>
                  <tr>
                    <td><i class="bi bi-check2-circle"></i> Hemat air</td>
                  </tr>
                  <tr>
                    <td>
                      <i class="bi bi-check2-circle"></i> Kualitas hasil
                      tanaman terjamin
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="bi bi-check2-circle"></i> Ramah lingkungan
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="swiper-slide px-5" id="thirdSlide">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <img src="../img/hydroponics-1.jpg" class="gambar-bagian2" alt="hydroponics-1" />
              </div>
              <div class="col-md-6">
                <h2 class="judul-bagian2">SMARTHYDROPONIC</h2>
                <p class="paragraf">
                  Smarthydroponic merupakan suatu sistem yang berfungsi untuk
                  me-monitoring tanaman yang ditanam dengan menggunakan sistem
                  hidroponik. Kegiatan monitoring ini bertujuan untuk
                  mengetahui keadaan objek tanaman tersebut selama masa
                  berkembang. Variabel yang di-monitoring biasanya seperti
                  kelembapan, suhu, pH, dan intensitas cahaya.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
          <i class="bi bi-arrow-left-circle"></i>
        </div>
        <div class="swiper-button-next">
          <i class="bi bi-arrow-right-circle"></i>
        </div>
      </div>
      <div
        class="d-flex justify-content-center mt-5 flex-md-row flex-column flex-wrap"
      >
        <button id="firstButton" class="swiper-button active text-center">
          APA ITU HIDROPONIK
        </button>
        <button id="secondButton" class="swiper-button text-center">
          KENAPA HARUS HIDROPONIK?
        </button>
        <button id="thirdButton" class="swiper-button text-center">
          SMARTHYDROPONIC
        </button>
      </div>
    </div>
  </section>
  <!-- Akhir Hidroponik Bagian 2 Slide 1 -->

  <!-- Hidroponik Bagian 3 -->
  <section id="plants">
    <div class="container">
      <h1 class="plants-title">
        JENIS TANAMAN <br />
        HIDROPONIK
      </h1>
      <div class="cards">
        <div class="row">
          @if ($first_plant->isNotEmpty())
            @foreach ($first_plant as $plant)
            <div class="col-lg-3 col-sm-6">
              <img src="/files/plants/{{ $plant->image }}" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>{{ $plant->name }}</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center"> 
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">{{ $plant->nursery_time }}</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">{{ $plant->leaves }}</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i>
                    <span class="penjelasan flex-grow-1">{{ $plant->planing_time }}</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            @endforeach
          @else
            <h2 class="cards-title text-center mb-5 pb-5">Belum ada data</h2>
          @endif
        </div>
      </div>
      <div class="collapse" id="collapseExample">
        <div class="cards">
          <div class="row">
            @if($other_plant)
              @foreach ($other_plant as $plant)
              <div class="col-lg-3 col-sm-6">
                <img src="/files/plants/{{ $plant->image }}" class="gambar-tanaman" alt="Brokoli" />
                <table class="table">
                  <tr>
                    <th>{{ $plant->name }}</th>
                  </tr>
                  <tr>
                    <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                      <img class="gambar-bagian3" src="img/tangan.svg"> 
                      <span class="penjelasan flex-grow-1">{{ $plant->nursery_time }}</span>
                      <span class="titik"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                      <img class="gambar-bagian3" src="img/daun.svg"> 
                      <span class="penjelasan flex-grow-1">{{ $plant->leaves }}</span>
                      <span class="titik"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                      <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">{{ $plant->planing_time }}</span>
                      <span class="titik"></span>
                    </td>
                  </tr>
                </table>
              </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    @if ($other_plant)
    <button class="plants-button text-center mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      MORE
    </button>
    @endif
  </section>
  <!-- Akhir Hidroponik Bagian 3 -->

    <!-- Hidroponik Bagian 4 -->
    <section id="artikel">
      <div class="container">
        <h1 class="artikel-title">ARTIKEL</h1>
        <div class="cards-artikel">
          <div class="row">
            @if ($newest->isNotEmpty())
              @foreach ($newest as $article)
              <div class="col-lg-3 col-sm-6">
                <h2 class="artikel-header top-border d-block">
                  {{ $article->title }}
                </h2>
                <div class="image-container">
                  <img src="/files/article/image/{{ $article->image }}" class="artikel-image" alt="slide4" />
                </div>
                <p class="artikel-paragraf">
                  {{ $article->description }}
                </p>
              </div>
              @endforeach
            @else
            <h2 class="artikel-header d-block text-center">
              Belum ada artikel
            </h2>
            @endif
          </div>
        </div>
      </div>
      <a href="/article" class="artikel-button text-center mx-auto">MORE ARTICLES</a>
    </div>
  </section>
  <!-- Akhir Hidroponik Bagian 4 -->

  <!-- Footer -->
  <section class="footer text-white d-flex align-items-center">
    <div class="container">
      <a href="/monitoring" class="footer-rincian">
        Lihat grafik monitoring hidroponik dan solar tracker
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </section>
  <!-- Akhir Footer -->

@endsection