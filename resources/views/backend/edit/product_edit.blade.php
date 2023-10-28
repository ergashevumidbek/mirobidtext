@extends('backend.layouts.master')
@section('title')
Mahsulotlarni taxrirlash
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
            <li class="breadcrumb-item active">Mahsulotlarni taxrirlash                          </li>
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
            <form action="{{route('mirobid_product.update', ['mirobid_product'=>$mirobidProduct->id])}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col-4">
                        <div class="mb-3">
                          <label>Mahsulot nomi</label>
                          <input class="form-control" type="text" name="product_name" placeholder="Mahsulot nomi" value="{{$mirobidProduct->product_name}}">
                        </div>
                      </div>
                      <div class="col-8">
                          <div class="mb-3">
                            <label>Mahsulot qisqa tarif</label>
                            <input class="form-control" type="text" name="pro_short_content" placeholder="Mahsulot nomi" value="{{$mirobidProduct->pro_short_content}}">
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Mahsulot turi</label>
                            <select class="form-select" name="product_type">
                              <option value="{{$mirobidProduct->product_type}}">{{$mirobidProduct->product_type}}</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Mahsulot banner rasm</label>
                            <input class="form-control" type="file" name="pro_banner_img" placeholder="Mahsulot turi" >
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Kontent rasm (bir nechta)</label>
                            <input class=" form-control" name="pro_content_img" type="file" >
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                            <label>Mahsulotga tarif</label>
                            <textarea name="pro_label" class="form-control" id="" cols="20" rows="10">{{$mirobidProduct->pro_label}}</textarea>
                          </div>
                        </div>

                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="text-end"><input type="submit" value="Taxrirlash" class="btn btn-success me-3"><a class="btn btn-danger" href="{{route('mirobid_product.index')}}">Bekor qilish</a></div>
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
