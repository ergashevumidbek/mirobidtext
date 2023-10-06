@extends('layouts.master')
@section('title')
Mahsulotlarni yaratish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
            Mahsulotlarni yaratish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Mahsulotlarni yaratish                          </li>
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
                <div class="col-4">
                  <div class="mb-3">
                    <label>Mahsulot nomi</label>
                    <input class="form-control" type="text" placeholder="Mahsulot nomi">
                  </div>
                </div>
                <div class="col-8">
                    <div class="mb-3">
                      <label>Mahsulot qisqa tarif</label>
                      <input class="form-control" type="text" placeholder="Mahsulot nomi">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Mahsulot turi</label>
                      <select class="form-select">
                        <option>Mahsulot turini tanlang</option>
                        <option>Fix price</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Mahsulot banner rasm</label>
                      <input class="form-control" type="file" placeholder="Mahsulot turi">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Kontent rasm (bir nechta)</label>
                      <input class="datepicker-here form-control" type="file" >
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col">
                    <div class="mb-3">
                      <label>Mahsulotga tarif</label>
                      <textarea name="" class="form-control" id="" cols="20" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h4>Mahsulot spetsifikatsiyasi</h4>
                      </div>
                      <div class="card-body">
                        <textarea id="editor1" name="editor1" cols="30" rows="10">
                        </textarea>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('products')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
