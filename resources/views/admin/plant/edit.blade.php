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
          <li class="breadcrumb-item"><a href="/admin/plant"><i class="bi bi-list-check"></i> Plant Types</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit {{ $plant->name }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Edit Hydroponic Plant Types</h6>
  <hr>
  <div class="card">
    <form action="/admin/plant/{{ $plant->id }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="name" class="form-label">Jenis Tanaman</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan jenis tanaman" value="{{ old('name', $plant->name) }}">
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="nursery_time" class="form-label">Lama di Persemaian</label>
              <input type="text" class="form-control @error('nursery_time') is-invalid @enderror" id="nursery_time" name="nursery_time" placeholder="Masukkan lama di persemaian" value="{{ old('nursery_time', $plant->nursery_time) }}">
              @error('nursery_time')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="leaves" class="form-label">Jumlah Helai Daun</label>
              <input type="text" class="form-control @error('leaves') is-invalid @enderror" id="leaves" name="leaves" placeholder="Masukkan jumlah helai daun" value="{{ old('leaves', $plant->leaves) }}">
              @error('leaves')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="planing_time" class="form-label">Masa Tanam</label>
              <input type="text" class="form-control @error('planing_time') is-invalid @enderror" id="planing_time" name="planing_time" placeholder="Masukkan masa tanam" value="{{ old('planing_time', $plant->planing_time) }}">
              @error('planing_time')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="image" class="form-label">Gambar Tanaman</label>
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept=".png,.jpg,.jpeg">
              <small class="text-primary">Max 1 File format .png, .jpg, .jpeg</small>
              @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Edit Plant!</button>
      </div>
    </form>
  </div>
  
@endsection