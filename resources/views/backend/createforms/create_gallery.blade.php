@extends('backend.layouts.master')
@section('title')
Galeriya yaratish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
            Galeriya yaratish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Galeriya yaratish                           </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid project-create">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <label>Galereya rasm nomi</label>
                          <input class="form-control" type="text" name="gallery_name" placeholder="Nomi" value="{{ old('gallery_name') }}">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <label>Galereya qisqa matn</label>
                          <input class=" form-control" type="text" name="gallery_short_text"  placeholder="Qisqa matn" value="{{ old('gallery_short_text') }}">
                        </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Galereya rasm </label>
                            <input class=" form-control" type="file"  name="gallery_img" placeholder="Qisqa matn" value="{{ old('gallery_img') }}">
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="text-end"><input type="submit" class="btn btn-success me-3" value="Saqlash"><a class="btn btn-danger" href="{{route('gallery.index')}}">Bekor qilish</a></div>
                      </div>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
