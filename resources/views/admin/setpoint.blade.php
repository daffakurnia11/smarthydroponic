@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Data Set Point</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Set Point</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="col-lg-9">
    <h6 class="mb-0 text-uppercase">Set Point Hydroponic Plants</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Tanaman</th>
                <th>pH</th>
                <th>EC</th>
                <th>PPM</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($setpoints as $data)
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td class="text-start">{{ $data->plant }}</td>
                  <td class="text-center">
                    @if ($data->lower_ph == $data->upper_ph)
                      {{ $data->lower_ph }}
                    @else
                      {{ $data->lower_ph }} - {{ $data->upper_ph }}
                    @endif
                  </td>
                  <td class="text-center">
                    @if ($data->lower_ec == $data->upper_ec)
                      {{ $data->lower_ec }}
                    @else
                      {{ $data->lower_ec }} - {{ $data->upper_ec }}
                    @endif
                  </td>
                  <td class="text-center">
                    @if ($data->lower_ppm == $data->upper_ppm)
                      {{ $data->lower_ppm }}
                    @else
                      {{ $data->lower_ppm }} - {{ $data->upper_ppm }}
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama Tanaman</th>
                <th>pH</th>
                <th>EC</th>
                <th>PPM</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer">
        <p class="my-2">
          Sumber : <a href="https://images.app.goo.gl/Ev5WjDc7sLXjrtHH7" target="_blank">https://images.app.goo.gl/Ev5WjDc7sLXjrtHH7</a>
        </p>
      </div>
    </div> 
  </div>
  
@endsection