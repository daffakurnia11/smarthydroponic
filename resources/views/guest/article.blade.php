@extends('guest.layouts.main')

@section('content')
    
<!-- Jumbotron -->
<section class="jumbotron2 d-flex">
  <div class="container">
    <h1 class="jumbotron2-judul">ARTIKEL</h1>
  </div>
</section>
<!-- Akhir Jumbotron -->

<!-- Body 1 -->
<section class="artikelterbaru">
  <div class="container px-5">
    <div class="konten">
      <h2 class="konten-title">
        <span class="konten-span mx-auto px-2 px-md-5"
          >ARTIKEL TERBARU</span
        >
      </h2>
      <div class="konten-cards">
        <div class="row">
          @if ($newest->isNotEmpty())
            @foreach ($newest as $article)
              <div class="col-lg-3 col-sm-6 px-3 pb-5">
                <div class="image-container d-flex justify-content-center align-items-center">
                  <img src="/files/article/image/{{ $article->image }}" class="cards-image d-block" alt="slide4" />
                </div>
                <h2 class="cards-header text-start">
                  {{ $article->title }}
                </h2>
                {{-- <p class="cards-penjelasan text-start">
                  {{ $article->description }}
                </p> --}}
              </div>
            @endforeach
          @else
            <h2 class="cards-header text-center mb-5">
              Belum ada artikel
            </h2>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Body 1 -->

<!-- Body 2 -->
<section id="artikellengkap">
  <div class="container">
    @if ($articles->isNotEmpty())
      @foreach ($articles as $article)
      <div class="row justify-content-center align-items-center mt-5">
        <div class="col-md-6">
          <div class="artikellengkap-rincian d-flex justify-content-center align-items-center">
            <img src="/files/article/image/{{ $article->image }}" class="rincian-image d-block" alt="article" />
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="rincian-header">
            {{ $article->title }}
          </h2>
          <p class="rincian-paragraf">
            {{ $article->description }}
          </p>
          <a class="rincian-a" href="/{{ $article->slug }}" target="_blank">Lebih Banyak ></a>
        </div>
      </div>
      @endforeach
    @else
      <h2 class="rincian-header text-center my-5">
        Belum ada artikel
      </h2>
    @endif
  </div>
</section>
<!-- Akhir Body 2 -->

@endsection