@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Hydroponic Monitoring</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active d-none d-sm-block" aria-current="page">Monitoring</li>
          <li class="breadcrumb-item active" aria-current="page">Hydroponic</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">
    <div class="col-xl-4 order-xl-2 order-1">
      <h6 class="mb-0 text-uppercase">Export Data</h6>
      <hr>
      <div class="card">
        <form action="/admin/export/hydroponic" method="get">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-xl-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label">From</label>
                  <input class="result form-control" type="text" name="from" id="fromTime">
                </div>
              </div>
              <div class="col-xl-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Until</label>
                  <input class="result form-control" type="text" name="to" id="untilTime">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-between">
              <a href="/admin/export-all/hydroponic" class="btn btn-outline-danger d-block">Export All Data</a>
              <button type="submit" class="btn btn-success d-block">Export Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1 order-2 mx-auto">

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        pH Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">pH : </span>
          <span id="pH">00</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="pHChartAdmin"></canvas>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <form action="/pumpcontrol" method="POST" class="pumpcontrol">
              @csrf
              <button type="submit" class="btn px-5 radius-30 mx-2 <?= $phUp_state->state == 1 ? 'btn-danger' : 'btn-success'; ?>" id="phUp">pH Up</button>
            </form>
            <form action="/pumpcontrol" method="post" class="pumpcontrol">
              @csrf
              <button type="submit" class="btn px-5 radius-30 mx-2 <?= $phDown_state->state == 1 ? 'btn-danger' : 'btn-success'; ?>" id="phDown">pH Down</button>
            </form>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">  
        EC Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">EC : </span>
          <span id="EC">00</span>
          <span>ppm</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="ECChartAdmin"></canvas>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <form action="/pumpcontrol" method="POST" class="pumpcontrol">
              @csrf
              <button type="submit" class="btn px-5 radius-30 mx-2 <?= $nutrisi_state->state == 1 ? 'btn-danger' : 'btn-success'; ?>" id="nutrisiA">Nutrisi</button>
            </form>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Level Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Level : </span>
          <span id="Level">00</span>
          <span>cm</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="LevelChartAdmin"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(function () {
      const pHChart = new Chart(document.getElementById("pHChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'pH',
            data: [],
            borderWidth: 1,
            borderColor: '#198754',
            backgroundColor: '#198754',
          }]
        },
        options: {
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            },
            x: {
              reverse: true
            }
          }
        }
      });

      const ECChart = new Chart(document.getElementById("ECChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'EC',
            data: [],
            borderWidth: 1,
            borderColor: '#dc3545',
            backgroundColor: '#dc3545',
          }]
        },
        options: {
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            },
            x: {
              reverse: true
            }
          }
        }
      });

      const LevelChart = new Chart(document.getElementById("LevelChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Level',
            data: [],
            borderWidth: 1,
            borderColor: '#0d6efd',
            backgroundColor: '#0d6efd',
          }]
        },
        options: {
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            },
            x: {
              reverse: true
            }
          }
        }
      });

      var updateChart = function () {
        $.ajax({
          url: window.location.origin + '/datacontrol',
          type: 'GET',
          dataType: 'json',
          success: function (data) {
            pHChart.data.labels = data.timeSensor;
            pHChart.data.datasets[0].data = data.pHValue;
            pHChart.update();
            $('#pH').html(data.value_ph);

            ECChart.data.labels = data.timeSensor;
            ECChart.data.datasets[0].data = data.ECValue;
            ECChart.update();
            $('#EC').html(data.value_ec);

            LevelChart.data.labels = data.timeSensor;
            LevelChart.data.datasets[0].data = data.LevelValue;
            LevelChart.update();
            $('#Level').html(data.value_level);
          },
          error: function (data) {
            console.log(data)
          }
        });
      }

      updateChart();
      setInterval(() => {
        updateChart();
      }, 2000);
    });
  </script>
  
@endsection