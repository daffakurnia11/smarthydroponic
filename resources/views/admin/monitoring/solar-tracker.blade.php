@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif
  
  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Solar Tracker Monitoring</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active d-none d-sm-block" aria-current="page">Monitoring</li>
          <li class="breadcrumb-item active" aria-current="page">Solar Tracker</li>
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
        <form action="/admin/export/solar-tracker" method="get">
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
              <a href="/admin/export-all/solar-tracker" class="btn btn-outline-danger d-block">Export All Data</a>
              <button type="submit" class="btn btn-success d-block">Export Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1 order-2 mx-auto">

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Voltage Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Voltage : </span>
          <span id="Voltage">00</span>
          <span>V</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="VoltageChartAdmin"></canvas>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">  
        Current Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Current : </span>
          <span id="Current">00</span>
          <span>A</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="CurrentChartAdmin"></canvas>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Power Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Power : </span>
          <span id="Power">00</span>
          <span>Watt</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="PowerChartAdmin"></canvas>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Energy Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Energy : </span>
          <span id="Energy">00</span>
          <span>Wh</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="EnergyChartAdmin"></canvas>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">  
        X-axis Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">X-axis : </span>
          <span id="xAngle">00</span>
          <span>deg</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="xAxis"></canvas>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Y-axis Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">Y-axis : </span>
          <span id="yAngle">00</span>
          <span>deg</span>
        </p>
      </h6>
      <hr/>
      <div class="card">
        <div class="card-body">
          <div class="chart-container1">
            <canvas id="yAxis"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    $(function () {

      const VoltageChart = new Chart(document.getElementById("VoltageChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Voltage',
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

      const CurrentChart = new Chart(document.getElementById("CurrentChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Current',
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

      const PowerChart = new Chart(document.getElementById("PowerChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Power',
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

      const EnergyChart = new Chart(document.getElementById("EnergyChartAdmin").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Energy',
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

      const xAxis = new Chart(document.getElementById("xAxis").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'X Axis',
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
              beginAtZero: true,
              max: 180
            },
            x: {
              reverse: true
            }
          }
        }
      });

      const yAxis = new Chart(document.getElementById("yAxis").getContext('2d'), {
        type: 'line',
        data: {
          labels: [],
          datasets: [{
            label: 'Y Axis',
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
              beginAtZero: true,
              max: 180
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
            VoltageChart.data.labels = data.timeSensor;
            VoltageChart.data.datasets[0].data = data.VoltageValue;
            VoltageChart.update();
            $('#Voltage').html(data.value_voltage);

            CurrentChart.data.labels = data.timeSensor;
            CurrentChart.data.datasets[0].data = data.CurrentValue;
            CurrentChart.update();
            $('#Current').html(data.value_current);

            PowerChart.data.labels = data.timeSensor;
            PowerChart.data.datasets[0].data = data.PowerValue;
            PowerChart.update();
            $('#Power').html(data.value_power);

            EnergyChart.data.labels = data.timeSensor;
            EnergyChart.data.datasets[0].data = data.EnergyValue;
            EnergyChart.update();
            $('#Energy').html(data.value_energy);

            xAxis.data.labels = data.timeAngle;
            xAxis.data.datasets[0].data = data.xValue;
            xAxis.update();
            $('#xAngle').html(data.value_x);

            yAxis.data.labels = data.timeAngle;
            yAxis.data.datasets[0].data = data.yValue;
            yAxis.update();
            $('#yAngle').html(data.value_y);
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