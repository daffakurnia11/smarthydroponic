@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Plant Types</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Plant Types</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase d-flex flex-column flex-sm-row align-items-center justify-content-between">
    Hydroponic Plant Lists
    <a href="/admin/plant/create" class="btn btn-primary mt-3 mt-sm-0">Add Plant</a>
  </h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Jenis Tanaman</th>
              <th>Lama di Persemaian</th>
              <th>Jumlah Helai Daun</th>
              <th>Masa Tanam</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($plants as $plant)
              <tr>
                <td class="align-middle text-center">{{ $loop->iteration }}</td>
                <td class="align-middle text-wrap">{{ $plant->name }}</td>
                <td class="align-middle text-wrap">{{ $plant->nursery_time }}</td>
                <td class="align-middle text-wrap">{{ $plant->leaves }}</td>
                <td class="align-middle text-center">{{ $plant->planing_time}}</td>
                <td class="align-middle text-center">
                  <a href="/files/plants/{{ $plant->image }}" target="_blank">
                    Lihat gambar
                  </a>
                </td>
                <td class="align-middle text-center">
                  <form action="/admin/plant/{{ $plant->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/admin/plant/{{ $plant->id }}/edit" class="text-success"><i class="bi bi-pencil-square"></i> Edit</a>
                    <button type="submit" class="btn btn-sm text-danger" id="deleteButton"><i class="bi bi-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Jenis Tanaman</th>
              <th>Lama di Persemaian</th>
              <th>Jumlah Helai Daun</th>
              <th>Masa Tanam</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

@endsection