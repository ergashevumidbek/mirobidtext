@extends('layouts.master')
@section('title')
Gost yaratish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
            Gost yaratish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Gost yaratish                           </li>
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
                <div class="col">
                  <div class="mb-3">
                    <label>Gost nomi</label>
                    <input class="form-control" type="text" placeholder="Gost nomi">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label>Gost banner rasm</label>
                        <input class="form-control" type="file" placeholder="Gost nomi">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Gostga tarif</label>
                    <textarea name=""  class="form-control" height="100px" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('sertificate')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
