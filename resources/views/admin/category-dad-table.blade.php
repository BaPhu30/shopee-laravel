@extends('admin/layout')

@push('styles')
<!-- Link style -->
<link rel="stylesheet" href="{{ asset('/css/admin/category-dad-table.css') }}">
@endpush

@section('sidebar-menu')
<!-- Sidebar Menu -->

<!-- /.sidebar-menu -->
@endsection

@section('title')
Category Dad Table
@endsection

@section('title-sub')
Category Dad Table
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title w-100 d-flex align-items-center">Category Dad Table</h3>
        <a href="{{ route('admin.insert-category-dad-table') }}" class="btn btn-success">Create</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover mb-3">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Category as $Categories)
            <tr>
              <td>{{ $Categories->id }}</td>
              <td>{{ $Categories->name }}</td>
              <td>
                <img src='{{ $Categories->img }}'>
              </td>
              <td>
                <div class="w-100 d-flex">
                  <button id="edit-{{ $Categories->id }}" class="edit-data btn btn-warning mr-2" data-name="{{ $Categories->name }}" data-img="{{ $Categories->img }}" data-toggle="modal" data-target="#modal-edit">Edit</button>
                  <button id="delete-{{ $Categories->id }}" class="delete-data btn btn-danger">Delete</button>
                </div>
              </td>
            </tr>
            @endforeach
        </table>
        {!! $Category->links() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@section('modal-edit')
<div class="modal fade bd-example-modal-lg" id="modal-edit" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-content modal-lg">
    <div class="modal-header">
      <h2 class="modal-title" id="exampleModalLongTitle">Edit Category Dad Table</h2>
      <button id="x-modal-edit" type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form>
        <div class="row m-0">
          <input id="id-edit" class="d-none" type="text">
          <div class="col-12">
            <label for="name-edit" class="form-label">Name:</label>
            <input id="name-edit" class="w-100 form-control bg-white" type="text" placeholder="Name">
          </div>
          <div class="col-12">
            <label for="image-edit" class="form-label">Image:</label>
            <label for="image-edit" class="btn btn-primary w-100 col-12">Choose Image</label>
            <input id="image-edit" class="d-none" type="file" accept="image/*">
            <div class="gallery-image-edit"></div>
          </div>
          <input id="image-old" class="d-none" type="text">
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button id="close-modal-edit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button id="edit-data" class="btn btn-primary" data-dismiss="modal">Save</button>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Link script admin/category-dad-table -->
<script src="{{ asset('/js/admin/category-dad-table.js') }}"></script>
@endpush