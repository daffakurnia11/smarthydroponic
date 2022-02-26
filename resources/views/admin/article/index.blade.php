@extends('admin.layouts.main')

@section('container')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Article</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Article</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Article Lists</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Article File</th>
              <th>Reader</th>
              <th>Created At</th>
              <th>Published At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $article)
              <tr>
                <td class="align-middle text-center">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $article->title }}</td>
                <td class="align-middle text-wrap">{{ $article->description }}</td>
                <td class="align-middle">
                  <a href="/files/article/paper/{{ $article->paper }}" target="_blank">
                    {{ $article->paper }}
                  </a>
                </td>
                <td class="align-middle text-center">{{ $article->reader}}</td>
                <td class="align-middle text-center">{{ $article->created_at }}</td>
                <td class="align-middle text-center">
                  @if ($article->published_at)
                  {{ $article->published_at }}
                  @else
                  <span class="text-danger">Not published</span>
                  @endif
                </td>
                <td class="align-middle text-center">
                  <form action="/admin/article/{{ $article->slug }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/admin/article/{{ $article->slug }}/edit" class="text-success"><i class="bi bi-pencil-square"></i> Edit</a>
                    <button type="submit" class="btn btn-sm text-danger" id="deleteButton"><i class="bi bi-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Article File</th>
              <th>Reader</th>
              <th>Created At</th>
              <th>Published At</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

@endsection