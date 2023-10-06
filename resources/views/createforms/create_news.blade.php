@extends('layouts.master')
@section('title')
Talabani ro'yhatga olish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             Talabani ro'yhatga olish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Talaba qo'shish                           </li>
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
                    <label>Yangilik sarlovha</label>
                    <input class="form-control" type="text" placeholder="Yangilik sarlovha *">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Yangilik haqida qisqacha</label>
                    <input class="form-control" type="text" placeholder="Qisqa matn">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Banner rasm</label>
                    <input class="form-control" type="file" placeholder="+99899999999">
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Kantent rasm-1 (istalgan miqdor)</label>
                      <input class="form-control" type="file" multiple>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Kantent rasm-2 (istalgan miqdor)</label>
                      <input class="form-control" type="file" multiple>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h4>Yangilik asosiy qism</h4>
                      </div>
                      <div class="card-body">
                        <textarea id="editor1" name="editor1" cols="30" rows="10">


                        </textarea>
                      </div>
                    </div>
                  </div>

              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="#">Saqlash</a><a class="btn btn-danger" href="{{route('mirobidtex_news')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
