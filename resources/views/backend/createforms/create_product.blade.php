@extends('backend.layouts.master')
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
            <form action="{{route('mirobid_product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col-4">
                        <div class="mb-3">
                          <label>Mahsulot nomi</label>
                          <input class="form-control @error('product_name') is-invalid  @enderror" type="text" name="product_name" placeholder="Mahsulot nomi" >
                            @error('product_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="col-8">
                          <div class="mb-3">
                            <label>Mahsulot qisqa tarif</label>
                            <input class="form-control @error('pro_short_content') is-invalid  @enderror" type="text" name="pro_short_content" placeholder="Mahsulot nomi" >
                            @error('pro_short_content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Mahsulot turi</label>
                            <select class="form-select @error('product_type') is-invalid  @enderror" name="product_type">
                              <option value="Mahsulot turini tanlang">Mahsulot turini tanlang</option>
                              <option value="Toqilmagan mato"> To'qilmagan mato</option>
                              <option value="Vafli mato">Vafli mato</option>
                              <option value="Vata prima">Vata prima</option>
                                <option value="Teri sochiqlar">Teri sochiqlar</option>
                                <option value="Supurgilar">Supurgilar</option>
                                <option value="Doka">Doka</option>
                            </select>
                            @error('product_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Mahsulot banner rasm</label>
                            <input class="form-control @error('pro_banner_img') is-invalid  @enderror" type="file" name="pro_banner_img" placeholder="Mahsulot turi" >
                            @error('pro_banner_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Kontent rasm-1 </label>
                            <input class=" form-control @error('pro_content_img_1') is-invalid  @enderror" name="pro_content_img_1"   type="file" >
                            @error('pro_content_img_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Kontent rasm-2 </label>
                                <input class=" form-control @error('pro_content_img_2') is-invalid  @enderror" name="pro_content_img_2"   type="file" >
                                @error('pro_content_img_2')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Kontent rasm-3 </label>
                                <input class=" form-control @error('pro_content_img_3') is-invalid  @enderror" name="pro_content_img_3"   type="file" >
                                @error('pro_content_img_3')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label>Kontent rasm-4 </label>
                                <input class=" form-control @error('pro_content_img_4') is-invalid  @enderror" name="pro_content_img_4"   type="file" >
                                @error('pro_content_img_4')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>Mahsulotga tarif</h4>
                                </div>
                                <div class="card-body">
                                    <textarea id="editor2" name="pro_label" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
{{--                      <div class="col">--}}
{{--                          <div class="mb-3">--}}
{{--                            <label>Mahsulotga tarif</label>--}}
{{--                            <textarea name="pro_label" class="form-control @error('pro_label') is-invalid  @enderror" id="" cols="20" rows="10">{{ old('pro_label') }}</textarea>--}}
{{--                            @error('pro_label')--}}
{{--                                <div class="text-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                          </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Mahsulot spetsifikatsiyasi</h4>
                            </div>
                            <div class="card-body">
                            <textarea id="editor1" name="spetsification" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="text-end">
                            <input type="submit" value="Saqlash" class="btn btn-success me-3">
                            <a class="btn btn-danger" href="{{route('mirobid_product.index')}}">Bekor qilish</a></div>
                      </div>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>


  </div>
@endsection
