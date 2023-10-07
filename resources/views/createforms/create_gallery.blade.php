@extends('layouts.master')
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
            <div class="form theme-form">

              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Galereya rasm nomi</label>
                    <input class="form-control" type="text" placeholder="Nomi">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Galereya qisqa matn</label>
                    <input class=" form-control" type="text"  placeholder="Qisqa matn">
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Galereya rasm </label>
                      <input class=" form-control" type="file"  placeholder="Qisqa matn">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('gallery')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
