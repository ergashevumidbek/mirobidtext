@extends('layouts.master')
@section('title')
IceBerg hodimlari
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             Hodimlarni ro'yhatga olish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Hodimlarni ro'yhatga olish  </li>
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
                    <label>Hodim Ism</label>
                    <input class="form-control" type="text" placeholder="Ism">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Hodim familya</label>
                    <input class="form-control" type="text" placeholder="Familya">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Hodim lavozim</label>
                    <input class="form-control" type="text" placeholder="Lavozim">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Telifon</label>
                    <input class="form-control" type="text" placeholder="Telifon">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Hodim rasm</label>
                    <input class="form-control" type="file" placeholder="Telifon">

                  </div>
                </div>
              </div>

              <div class="row my-5">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('staffes_table')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
