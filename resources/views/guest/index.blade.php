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
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"><i class="bi bi-arrow-left-circle"></i></div>
      <div class="swiper-button-next"><i class="bi bi-arrow-right-circle"></i></div>
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
          <div class="col-lg-3 col-sm-6">
            <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
            <table class="table">
              <tr>
                <th>Brokoli</th>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center"> 
                  <img class="gambar-bagian3" src="img/tangan.svg">
                  <span class="penjelasan flex-grow-1">2 Minggu</span>
                <span class="titik"></span>
              </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/daun.svg">
                  <span class="penjelasan flex-grow-1">3-4 helai</span>
                <span class="titik"></span></td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <i class="bi bi-clock"></i>
                  <span class="penjelasan flex-grow-1">65 HST</span>
                <span class="titik"></span>
              </td>
              </tr>
              </div>
            </table>
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
            <table class="table">
              <tr>
                <th>Cabai</th>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/tangan.svg">
                  <span class="penjelasan flex-grow-1">40-50 Hari</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/daun.svg">
                  <span class="penjelasan flex-grow-1">4-5 helai</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <i class="bi bi-clock"></i>
                  <span class="penjelasan flex-grow-1">85-90 HST</span>
                  <span class="titik"></span>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
            <table class="table">
              <tr>
                <th>Selada</th>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/tangan.svg">
                  <span class="penjelasan flex-grow-1">10-18 Hari</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center">
                  <img class="gambar-bagian3" src="img/daun.svg">
                  <span class="penjelasan flex-grow-1">4 helai</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <i class="bi bi-clock"></i>
                  <span class="penjelasan flex-grow-1">45-55 HST</span>
                  <span class="titik"></span>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
            <table class="table">
              <tr>
                <th>Paprika</th>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/tangan.svg">
                  <span class="penjelasan flex-grow-1">2-3 Minggu</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <img class="gambar-bagian3" src="img/daun.svg">
                  <span class="penjelasan flex-grow-1">4-5 helai</span>
                  <span class="titik"></span>
                </td>
              </tr>
              <tr>
                <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                  <i class="bi bi-clock"></i>
                  <span class="penjelasan flex-grow-1">20 MST</span>
                  <span class="titik"></span>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="collapse" id="collapseExample">
        <div class="cards">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Melon</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg"> 
                    <span class="penjelasan flex-grow-1">12-14 Hari</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg"> 
                    <span class="penjelasan flex-grow-1">4 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">75-90 HST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Pakcoi</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">3-4 Minggu</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">3-5 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">2 bulan</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Sawi</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">3 Minggu</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">4-5 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">2 bulan</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Seledri</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">2-3 Minggu</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">4 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">6-8 MST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Tomat</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">3-4 Minggu</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">3-4 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">78-85 HST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Timun Jepang</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">10-14 Hari</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">2-3 helai</span>
                  <span class="titik"></span>
                </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">38-40 HST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Terong Jepang</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">22-26 Hari</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">5 helai</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">90 HST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-3 col-sm-6">
              <img src="img/slide3.jpg" class="gambar-tanaman" alt="Brokoli" />
              <table class="table">
                <tr>
                  <th>Kailan</th>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/tangan.svg">
                    <span class="penjelasan flex-grow-1">10-18 Hari</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <img class="gambar-bagian3" src="img/daun.svg">
                    <span class="penjelasan flex-grow-1">3-5 helai</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                <tr>
                  <td class="rincian-tanaman d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock"></i> <span class="penjelasan flex-grow-1">52-56 HST</span>
                    <span class="titik"></span>
                  </td>
                </tr>
                </div>
              </table>
            </div>
            </div>
      </div>
    </div>
    <button class="plants-button text-center mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      MORE
    </button>
  </section>
  <!-- Akhir Hidroponik Bagian 3 -->

    <!-- Hidroponik Bagian 4 -->
    <section id="artikel">
      <div class="container">
        <h1 class="artikel-title">ARTIKEL</h1>
        <div class="cards-artikel">
          <div class="row">
            @foreach ($newest as $article)
            <div class="col-lg-3 col-sm-6">
              <h2 class="artikel-header d-block">
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