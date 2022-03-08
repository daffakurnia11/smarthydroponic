@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Hydroponic Logger</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active d-none d-sm-block" aria-current="page">Logger</li>
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
                  <input class="result form-control fromTime" type="text" name="from">
                </div>
              </div>
              <div class="col-xl-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Until</label>
                  <input class="result form-control untilTime" type="text" name="to">
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
      <h6 class="mb-0 text-uppercase">Filtering Data</h6>
      <hr>
      <div class="card">
        <form action="" method="get">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">From</label>
                  <input class="result form-control fromTime" type="text" value="{{ $from ?: '' }}" name="from">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Until</label>
                  <input class="result form-control untilTime" type="text" value="{{ $to ?: '' }}" name="to">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary d-block ms-auto">Filter!</button>
          </div>
        </form>
      </div>

      <h6 class="mb-0 text-uppercase">Data Logger Hydroponic</h6>
      <hr>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Reading Time</th>
                  <th>pH</th>
                  <th>EC (ppm)</th>
                  <th>EC (mS/cm)</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $data->reading_time }}</td>
                    <td class="text-center">{{ $data->value1 }}</td>
                    <td class="text-center">{{ $data->value2 }}</td>
                    <td class="text-center">{{ $data->value2 * 1.56 }}</td>
                    <td class="text-center">{{ $data->value3 }} cm</td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Reading Time</th>
                  <th>pH</th>
                  <th>EC (ppm)</th>
                  <th>EC (mS/cm)</th>
                  <th>Level</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection