<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#198754" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Animate on Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    ::-webkit-scrollbar {
      width: 0.5rem;
      height: 0.3rem;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #198754;
    }

    ::-webkit-scrollbar-track {
      background-color: transparent;
    }
  </style>

  <title>Smart Hidroponik UNAS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Smart Hidroponik UNAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row justify-content-center bg-secondary bg-opacity-10 my-4 mx-1 py-3 rounded-3 shadow">
      <h1 class="text-center h3 mb-4" data-aos="fade-up" data-aos-duration="1000">Hidroponik</h1>
      <div class="col-md-6 col-lg-4">
        <canvas id="pHChart" width="400" height="400" data-aos="zoom-in" data-aos-duration="1000"></canvas>
        <p class="text-center mt-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250" data-aos-offset="0">
          <span class="fw-bold">pH : </span>
          <span id="pH">00</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4">
        <canvas id="ECChart" width="400" height="400" data-aos="zoom-in" data-aos-duration="1000"></canvas>
        <p class="text-center mt-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250" data-aos-offset="0">
          <span class="fw-bold">EC : </span>
          <span id="EC">00</span>
          <span>ppm</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4">
        <canvas id="LevelChart" width="400" height="400" data-aos="zoom-in" data-aos-duration="1000"></canvas>
        <p class="text-center mt-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250" data-aos-offset="0">
          <span class="fw-bold">Level : </span>
          <span id="Level">00</span>
          <span>cm</span>
        </p>
      </div>
    </div>

    <div class="row bg-secondary bg-opacity-10 my-4 mx-1 py-3 rounded shadow">
      <h1 class="text-center h3 mb-4" data-aos="fade-up" data-aos-duration="1000">Solar Tracker</h1>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000">
        <canvas id="VoltageChart" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Voltage : </span>
          <span id="Voltage">00</span>
          <span>V</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
        <canvas id="CurrentChart" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Current : </span>
          <span id="Current">00</span>
          <span>A</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
        <canvas id="PowerChart" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Power : </span>
          <span id="Power">00</span>
          <span>Watt</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="750">
        <canvas id="EnergyChart" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Energy : </span>
          <span id="Energy">00</span>
          <span>Wh</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="750">
        <canvas id="xAxis" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Angle : </span>
          <span id="xAngle">00</span>
          <span>deg</span>
        </p>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="750">
        <canvas id="yAxis" width="400" height="400"></canvas>
        <p class="text-center mt-3">
          <span class="fw-bold">Angle : </span>
          <span id="yAngle">00</span>
          <span>deg</span>
        </p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>
  {{-- <script src="/js/script.js"></script> --}}
  <script src="/js/script.js?modified=<?= date("Y-m-d"); ?>"></script>

</body>

</html>