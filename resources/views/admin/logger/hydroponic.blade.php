@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Hydroponic Logger</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Logger</li>
          <li class="breadcrumb-item active" aria-current="page">Hydroponic</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">
    <div class="col-xl-9">
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
                  <input class="result form-control" type="text" value="{{ $from ?: '' }}" name="from" id="fromTime">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label">Until</label>
                  <input class="result form-control" type="text" value="{{ $to ?: '' }}" name="to" id="untilTime">
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
                  <th>EC</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $data->reading_time }}</td>
                    <td class="text-center">{{ $data->value1 }}</td>
                    <td class="text-center">{{ $data->value2 }} ms/cm</td>
                    <td class="text-center">{{ $data->value3 }} cm</td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Reading Time</th>
                  <th>pH</th>
                  <th>EC</th>
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