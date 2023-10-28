@extends('backend.layouts.master')
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
            <form action="{{route('sertificate.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Gost nomi</label>
                          <input class="form-control @error('gost_name')
                              is-invalid
                          @enderror" type="text" placeholder="Gost nomi" name="gost_name" value="{{ old('gost_name') }}">
                          @error('gost_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label>Gost banner rasm</label>
                              <input class="form-control @error('gost_banner_img')
                                  is-invalid
                              @enderror" type="file" placeholder="Gost nomi" name="gost_banner_img" value="{{ old('gost_banner_img') }}">
                              @error('gost_banner_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Gostga tarif</label>
                          <textarea name="gost_label"  class="form-control @error('gost_label')

                          @enderror" height="100px" id="" cols="30" rows="10"></textarea>
                          @error('gost_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="text-end"><input type="submit" value="Saqlash" class="btn btn-success me-3" ><a class="btn btn-danger" href="{{route('sertificate.index')}}">Bekor qilish</a></div>
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
