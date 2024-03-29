@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif
  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Hallo, {{ auth()->user()->name }}</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">

    <div class="col-12 col-lg-4 d-flex">
      <div class="card radius-10 w-100">
        <div class="card-body">
          <p>PH Graph</p>
          <h2 class="text-center fw-light">
            <span id="pHValue"></span>
          </h2>
          <div id="pHOverview"></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 d-flex">
      <div class="card radius-10 w-100">
        <div class="card-body">
          <p>EC Graph</p>
          <h2 class="text-center fw-light">
            <span id="ECValue"></span>
            <span class="h5">ppm</span>
          </h2>
          <div id="ECOverview"></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4 d-flex">
      <div class="card radius-10 w-100">
        <div class="card-body">
          <p>Level Graph</p>
          <h2 class="text-center fw-light">
            <span id="LevelValue"></span>
            <span class="h5">cm</span>
          </h2>
          <div id="LevelOverview"></div>
        </div>
      </div>
    </div>

  </div><!--end row-->

  <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-6">
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-primary text-primary">
            <i class="bi bi-battery-full"></i>
          </div>
          <p class="mb-0">Voltage</p>
          <h3 class="mt-4 mb-0" id="VoltageValue"></h3>
          <small id="VoltageProgress"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-danger text-danger">
            <i class="bi bi-shuffle"></i>
          </div>
           <p class="mb-0">Current</p>
           <h3 class="mt-4 mb-0" id="CurrentValue"></h3>
           <small id="CurrentProgress"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-success text-success">
            <i class="bi bi-plug"></i>
          </div>
          <p class="mb-0">Power</p>
           <h3 class="mt-4 mb-0" id="PowerValue"></h3>
           <small id="PowerProgress"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-info text-info">
            <i class="bi bi-battery-charging"></i>
          </div>
          <p class="mb-0">Energy</p>
           <h3 class="mt-4 mb-0" id="EnergyValue"></h3>
           <small id="EnergyProgress"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-purple text-purple">
            <i class="bi bi-arrow-bar-right"></i>
          </div>
          <p class="mb-0">X-axis</p>
           <h3 class="mt-4 mb-0" id="xValue"></h3>
           <small id="xProgress"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card radius-10">
        <div class="card-body text-center">
          <div class="widget-icon mx-auto mb-3 bg-light-orange text-orange">
            <i class="bi bi-arrow-bar-up"></i>
          </div>
          <p class="mb-0">Y-axis</p>
          <h3 class="mt-4 mb-0" id="yValue"></h3>
          <small id="yProgress"></small>
        </div>
      </div>
    </div>
  </div>

  <h6 class="mb-0 text-uppercase">System Controls</h6>
  <hr>
  <div class="card">
    <form action="/admin/control_update/{{ $control->id }}" method="post">
      @csrf
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3">
            <div class="card shadow-md">
              <div class="card-body">
                <h6 class="mb-0 text-uppercase">Control Types</h6>
                <hr>
                <div class="mb-3">
                  <select class="form-select @error('control') is-invalid @enderror" name="control" id="control" @if($control->locked == 1) disabled @endif>
                    <option selected="" disabled>--Choose control types--</option>
                    <option value="0" {{ $control->control == 0 ? 'selected' : '' }}>Manual</option>
                    <option value="1" {{ $control->control == 1 ? 'selected' : '' }}>Automatic</option>
                  </select>
                  @error('control')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card shadow-md">
              <div class="card-body">
                <h6 class="mb-0 text-uppercase">Threshold Level</h6>
                <hr>
                <div class="mb-3">
                  <label for="upper_level" class="form-label">Upper Level</label>
                  <div class="input-group">
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('upper_level') is-invalid @enderror" id="upper_level" name="upper_level" placeholder="0" value="{{ $control->upper_level }}">
                    <span class="input-group-text" id="basic-addon2">cm</span>
                  </div>
                  @error('upper_level')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="lower_level" class="form-label">Lower Level</label>
                  <div class="input-group">
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('lower_level') is-invalid @enderror" id="lower_level" name="lower_level" placeholder="0" value="{{ $control->lower_level }}">
                    <span class="input-group-text" id="basic-addon2">cm</span>
                  </div>
                  @error('lower_level')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card shadow-md">
              <div class="card-body">
                <h6 class="mb-0 text-uppercase">Threshold pH</h6>
                <hr>
                <div class="mb-3">
                  <label for="upper_ph" class="form-label">Upper pH</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon2">pH</span>
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('upper_ph') is-invalid @enderror" id="upper_ph" name="upper_ph" placeholder="0" value="{{ $control->upper_ph }}">
                  </div>
                  @error('upper_ph')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="lower_ph" class="form-label">Lower pH</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon2">pH</span>
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('lower_ph') is-invalid @enderror" id="lower_ph" name="lower_ph" placeholder="0" value="{{ $control->lower_ph }}">
                  </div>
                  @error('lower_ph')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card shadow-md">
              <div class="card-body">
                <h6 class="mb-0 text-uppercase">Threshold Nutrition</h6>
                <hr>
                <div class="mb-3">
                  <label for="upper_nutrisi" class="form-label">Upper Nutrition</label>
                  <div class="input-group">
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('upper_nutrisi') is-invalid @enderror" id="upper_nutrisi" name="upper_nutrisi" placeholder="0" value="{{ $control->upper_nutrisi }}">
                    <span class="input-group-text" id="basic-addon2">ppm</span>
                  </div>
                  @error('upper_nutrisi')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="lower_nutrisi" class="form-label">Lower Nutrition</label>
                  <div class="input-group">
                    <input @if($control->locked == 1) disabled @endif type="text" class="form-control @error('lower_nutrisi') is-invalid @enderror" id="lower_nutrisi" name="lower_nutrisi" placeholder="0" value="{{ $control->lower_nutrisi }}">
                    <span class="input-group-text" id="basic-addon2">ppm</span>
                  </div>
                  @error('lower_nutrisi')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer d-flex justify-content-end">
        <a href="/admin/control_reset?control={{ $control->id }}" id="resetControl" class="btn d-block {{ $control->locked != null ? 'btn-danger' : 'btn-outline-danger disabled' }} mx-2">Reset Control</a>
        <button type="submit" class="{{ $control->locked != null ? 'btn-outline-primary disabled' : 'btn-primary' }} btn d-block mx-2">Set Control</button>
      </div>
    </form>
  </div>

  <script>
    $(function () {
      var pHChart = {
        series: [{
            name: "Messages",
            data: []
        }],
        chart: {
            foreColor: '#9a9797',
            type: "area",
            //width: 130,
            height: 100,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 1.5,
            curve: "smooth"
        },
        colors: ["#3461ff"],
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
      };
      var ECChart = {
        series: [{
            name: "Members",
            data: []
        }],
        chart: {
            foreColor: '#9a9797',
            type: "area",
            // width: 130,
            height: 100,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#12bf24"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#12bf24"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 1.5,
            curve: "smooth"
        },
        colors: ["#12bf24"],
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1,
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
      };
      var LevelChart = {
        series: [{
            name: "New Tasks",
            data: []
        }],
        chart: {
            foreColor: '#9a9797',
            type: "area",
            // width: 130,
            height: 100,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#8932ff"
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 0,
            colors: ["#8932ff"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%",
                endingShape: "rounded"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 1.5,
            curve: "smooth"
        },
        colors: ["#8932ff"],
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function (e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
      };

      var updateChart = function () {
        $.ajax({
          url: window.location.origin + '/datacontrol',
          type: 'GET',
          dataType: 'json',
          success: function (data) {
            var chart1 = new ApexCharts(document.querySelector("#pHOverview"), pHChart);
            $('#pHValue').html(data.value_ph);
            chart1.render();
            chart1.updateSeries([{
              data: data.pHValue
            }]);

            var chart2 = new ApexCharts(document.querySelector("#ECOverview"), ECChart);
            $('#ECValue').html(data.value_ec);
            chart2.render();
            chart2.updateSeries([{
              data: data.ECValue
            }]);

            var chart3 = new ApexCharts(document.querySelector("#LevelOverview"), LevelChart);
            $('#LevelValue').html(data.value_level);
            chart3.render();
            chart3.updateSeries([{
              data: data.LevelValue
            }]);

            $('#VoltageValue').html(data.value_voltage + ' V');
            $('#CurrentValue').html(data.value_current + ' A');
            $('#PowerValue').html(data.value_power + ' Watt');
            $('#EnergyValue').html(data.value_energy + ' Wh');
            $('#xValue').html(data.value_x + ' deg');
            $('#yValue').html(data.value_y + ' deg');

            $('#VoltageProgress').html(data.progress_voltage + ' V');
            if (data.progress_voltage > 0) {
              $('#VoltageProgress').removeAttr('class');
              $('#VoltageProgress').addClass('text-success');
            } else {
              $('#VoltageProgress').removeAttr('class');
              $('#VoltageProgress').addClass('text-danger');
            }

            $('#CurrentProgress').html(data.progress_current + ' A');
            if (data.progress_current > 0) {
              $('#CurrentProgress').removeAttr('class');
              $('#CurrentProgress').addClass('text-success');
            } else {
              $('#CurrentProgress').removeAttr('class');
              $('#CurrentProgress').addClass('text-danger');
            }

            $('#PowerProgress').html(data.progress_power + ' Watt');
            if (data.progress_power > 0) {
              $('#PowerProgress').removeAttr('class');
              $('#PowerProgress').addClass('text-success');
            } else {
              $('#PowerProgress').removeAttr('class');
              $('#PowerProgress').addClass('text-danger');
            }

            $('#EnergyProgress').html(data.progress_energy + ' Wh');
            if (data.progress_energy > 0) {
              $('#EnergyProgress').removeAttr('class');
              $('#EnergyProgress').addClass('text-success');
            } else {
              $('#EnergyProgress').removeAttr('class');
              $('#EnergyProgress').addClass('text-danger');
            }

            $('#xProgress').html(data.progress_x + ' deg');
            if (data.progress_x > 0) {
              $('#xProgress').removeAttr('class');
              $('#xProgress').addClass('text-success');
            } else {
              $('#xProgress').removeAttr('class');
              $('#xProgress').addClass('text-danger');
            }

            $('#yProgress').html(data.progress_y + ' deg');
            if (data.progress_y > 0) {
              $('#yProgress').removeAttr('class');
              $('#yProgress').addClass('text-success');
            } else {
              $('#yProgress').removeAttr('class');
              $('#yProgress').addClass('text-danger');
            }
            
          },
          error: function (data) {
            console.log(data)
          }
        });
      }

      updateChart();
      setInterval(() => {
        updateChart();
      }, 10000);

    });
  </script>
  
@endsection