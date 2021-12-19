@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Solar Tracker Monitoring</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Monitoring</li>
          <li class="breadcrumb-item active" aria-current="page">Solar Tracker</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->
  
  <div class="row">
    <div class="col-xl-9 mx-auto">

      <h6 class="mb-0 text-uppercase d-flex justify-content-between">
        Voltage Monitoring
        <p class="text-center mb-0">
          <span class="fw-bold">pH : </span>
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
          <span class="fw-bold">EC : </span>
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
          <span class="fw-bold">Level : </span>
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
          <span class="fw-bold">pH : </span>
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
          <span class="fw-bold">EC : </span>
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
          <span class="fw-bold">Level : </span>
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
      }, 500);
      });
  </script>
  
@endsection