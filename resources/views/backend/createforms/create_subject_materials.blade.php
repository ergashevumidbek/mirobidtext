@extends('backend.layouts.master')
@section('title')
Salyder Qo'shish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
            Salyder Qo'shish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Salyder Qo'shish                           </li>
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
            <form action="{{route('slayder_content.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form theme-form">
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Slayder asosiy matn</label>
                          <input class="form-control @error('slayder_main_text')
                              is-invalid
                          @enderror" type="text" name="slayder_main_text" placeholder="Slayder asosiy matn" value="{{ old('slayder_main_text') }}">
                          @error('slayder_main_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="mb-3">
                          <label>Slayder qisqa matn</label>
                          <input class="form-control @error('slayder_short_text')

                          @enderror" type="text" name="slayder_short_text" placeholder="Qisqa matn" value="{{ old('slayder_short_text') }}">
                          @error('slayder_short_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Slayder rasm</label>
                            <input class="form-control @error('slayder_img')

                            @enderror" type="file" name="slayder_img" placeholder="Qisqa matn"  >
                            @error('slayder_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      <label for="">Slayder tarif</label>
                      <textarea name="slayder_label " id="" cols="30" rows="10"></textarea>
                     

                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="text-end"><input type="submit" value="Saqlash" class="btn btn-success me-3" ><a class="btn btn-danger" href="{{route('slayder_content.index')}}">Bekor qilish</a></div>
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
