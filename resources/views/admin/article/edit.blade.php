@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Article Management</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/admin/article"><i class="bi bi-journal-richtext"></i> Article Management</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Edit an article</h6>
  <hr>
  <div class="card">
    <form action="/admin/article/{{ $article->slug }}" method="post" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
      <div class="card-body">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter the title" value="{{ old('title', $article->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter the description of the article" rows="3">{{ old('description', $article->description) }}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="paper" class="form-label mb-1">Full Paper</label>
              <p>
                Current File : 
                <a href="/files/article/paper/{{ $article->paper }}" target="_blank">{{ $article->paper }}</a>
              </p>
              <input class="form-control @error('paper') is-invalid @enderror" type="file" id="paper" name="paper" accept=".pdf">
              <small class="text-primary">Max 1 File format .pdf</small>
              @error('paper')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="image" class="form-label mb-1">Image</label>
              <p>
                Current File :
                <a href="/files/article/image/{{ $article->image }}" target="_blank">{{ $article->image }}</a>
              </p>
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
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="publish" name="publish" {{ $article->published_at ? 'checked' : '' }}>
          <label class="form-check-label" for="publish">
            Publish now!
          </label>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Edit Article!</button>
      </div>
    </form>
  </div>
  
@endsection