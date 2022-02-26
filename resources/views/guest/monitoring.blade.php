@extends('guest.layouts.main')

@section('content')
    
    <!-- Header -->
    <header id="monitoring" class="d-flex align-items-center">
      <div class="container">
        <h1 class="header-title text-center">Monitoring</h1>
        <p class="header-desc text-center">Hidroponik dan Solar Tracker</p>
      </div>
    </header>
    <!-- End of Header -->

    <!-- Hidroponik -->
    <section id="hydroponic" class="py-5">
      <div class="container monitoring-container py-4">
        <h2 class="monitoring-title text-center">Hidroponik</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4 p-4">
            <canvas id="pHChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">pH : </span>
              <span id="pH">00</span>
            </p>
          </div>
          <div class="col-md-6 col-lg-4 p-4">
            <canvas id="ECChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">EC : </span>
              <span id="EC">00</span>
              <span>ppm</span>
            </p>
          </div>
          <div class="col-md-6 col-lg-4 p-4">
            <canvas id="LevelChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Level : </span>
              <span id="Level">00</span>
              <span>cm</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Hidroponik -->

    <!-- Solar Tracker -->
    <section id="hydroponic" class="py-5">
      <div class="container monitoring-container py-4">
        <h2 class="monitoring-title text-center">Solar Tracker</h2>
        <div class="row">
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
          >
            <canvas id="VoltageChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Voltage : </span>
              <span id="Voltage">00</span>
              <span>V</span>
            </p>
          </div>
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
            data-aos-delay="250"
          >
            <canvas id="CurrentChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Current : </span>
              <span id="Current">00</span>
              <span>A</span>
            </p>
          </div>
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
            data-aos-delay="500"
          >
            <canvas id="PowerChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Power : </span>
              <span id="Power">00</span>
              <span>Watt</span>
            </p>
          </div>
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
            data-aos-delay="750"
          >
            <canvas id="EnergyChart" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Energy : </span>
              <span id="Energy">00</span>
              <span>Wh</span>
            </p>
          </div>
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
            data-aos-delay="750"
          >
            <canvas id="xAxis" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Angle : </span>
              <span id="xAngle">00</span>
              <span>deg</span>
            </p>
          </div>
          <div
            class="col-md-6 col-lg-4"
            data-aos="zoom-in"
            data-aos-duration="1000"
            data-aos-delay="750"
          >
            <canvas id="yAxis" width="400" height="400"></canvas>
            <p class="text-center mt-3">
              <span class="fw-bold">Angle : </span>
              <span id="yAngle">00</span>
              <span>deg</span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Solar Tracker -->

@endsection