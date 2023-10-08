@extends('layouts.master')
@section('title')
Hodimlar taxrirlash
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             Hodimlarni malumotini taxrirlash</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Hodim malumotini taxrirlash  </li>
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
            <form action="{{route('mirobid_staff.update', ['mirobid_staff'=>$staff_edit_data->id])}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Hodim Ism</label>
                          <input class="form-control" type="text" placeholder="Ism" name="staff_name" value="{{$staff_edit_data->staff_name}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Hodim familya</label>
                          <input class="form-control" type="text" placeholder="Familya" name="staff_surname" value="{{$staff_edit_data->staff_surname}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <label>Hodim lavozim</label>
                          <input class="form-control" type="text" placeholder="Lavozim" name="staff_profission" value="{{$staff_edit_data->staff_profission}}">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <label>Hodim rasm</label>
                          <input class="form-control" name="staff_img" type="file" placeholder="Rasm" alt="Mirobid textile hodimlari">
                        </div>
                      </div>

                            <label>Hodim haqida</label>
                           <textarea name="staff_bio" id="" cols="150" rows="10">{{$staff_edit_data->staff_bio}}</textarea>

                    </div>

                    <div class="row my-5">
                      <div class="col">
                        <div class="text-end">
                            <input type="submit"  value="Saqlash" class="btn btn-success me-3" ><a class="btn btn-danger" href="{{route('mirobid_staff.index')}}">Bekor qilish</a></div>
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
