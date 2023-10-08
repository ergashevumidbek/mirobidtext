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
             Yangilik taxrirlash</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Yangilik taxrirlash</li>
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
           <form action="{{route('mirobidtext_news.update', ['mirobidtext_news'=>$mirobidtext_news->id])}}" method="post" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="form theme-form">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Yangilik sarlovha</label>
                      <input class="form-control @error('news_title')
                          is-invlid
                        @enderror" type="text" name="news_title" placeholder="Yangilik sarlovha *" value="{{$mirobidtext_news->news_title}}">
                        @error('news_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Yangilik haqida qisqacha</label>
                      <input class="form-control @error('news_short_content')  is-invalid
                      @enderror" type="text" name="news_short_content" placeholder="Qisqa matn" value="{{$mirobidtext_news->news_short_content}}">
                      @error('news_title')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Banner rasm</label>
                      <input class="form-control @error('banner_img') is-invalid
                      @enderror" type="file" name="banner_img" value="{{asset($mirobidtext_news->banner_img)}}">
                      <small class="text-success">{{$mirobidtext_news->banner_img}}</small>
                      @error('banner_img')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="mb-3">
                        <label>Kantent rasm-1 (istalgan miqdor)</label>
                        <input class="form-control @error('news_img_1') is-invalid
                        @enderror"  type="file" name="news_img_1" value="{{$mirobidtext_news->news_img_1}}">
                        <small class="text-success">{{$mirobidtext_news->news_img_1}}</small>
                        @error('news_img_1')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label>Kantent rasm-2 (istalgan miqdor)</label>
                        <input class="form-control @error('news_img_2') is-invalid
                        @enderror" type="file" name="news_img_2" value="{{$mirobidtext_news->news_img_2}}">
                        <small class="text-success">{{$mirobidtext_news->news_img_2}}</small>
                        @error('news_img_2')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                          <textarea id="editor1" name="main_content" cols="180" rows="10" class="@error('main_content') is-invalid
                          @enderror" >
                          {{$mirobidtext_news->main_content}}
                          </textarea>
                          @error('main_content')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    </div>

                <div class="row">
                  <div class="col">
                    <div class="text-end"><input type="submit" value="Saqlash" class="btn btn-success me-3"><a class="btn btn-danger" href="{{route('mirobidtext_news.index')}}">Bekor qilish</a></div>
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
