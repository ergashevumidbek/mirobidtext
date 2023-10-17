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
                          <input class="form-control @error('product_name') is-invalid  @enderror" type="text" name="product_name" placeholder="Mahsulot nomi" value="{{ old('product_name') }}">
                            @error('product_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="col-8">
                          <div class="mb-3">
                            <label>Mahsulot qisqa tarif</label>
                            <input class="form-control @error('pro_short_content') is-invalid  @enderror" type="text" name="pro_short_content" placeholder="Mahsulot nomi" value="{{ old('pro_short_content') }}">
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
                            </select>
                            @error('product_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Mahsulot banner rasm</label>
                            <input class="form-control @error('pro_banner_img') is-invalid  @enderror" type="file" name="pro_banner_img" placeholder="Mahsulot turi" value="{{ old('pro_banner_img') }}">
                            @error('pro_banner_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Kontent rasm (bir nechta)</label>
                            <input class=" form-control @error('pro_content_img') is-invalid  @enderror" name="pro_content_img" type="file" value="{{ old('pro_content_img') }}">
                            @error('pro_content_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                            <label>Mahsulotga tarif</label>
                            <textarea name="pro_label" class="form-control @error('pro_label') is-invalid  @enderror" id="" cols="20" rows="10">{{ old('pro_label') }}</textarea>
                            @error('pro_label')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                                                              {{-- <div class="col-sm-12">
                                                                <div class="card">
                                                                  <div class="card-header pb-0">
                                                                    <h4>Mahsulot spetsifikatsiyasi</h4>
                                                                  </div>
                                                                  <div class="card-body">
                                                                    <textarea class="@error('pro_spesificate') is-invalid  @enderror" id="editor1" name="pro_spesificate" cols="30" rows="10">
                                                                      {{ old('pro_spesificate') }}
                                                                    </textarea>
                                                                    @error('pro_spesificate')
                                                                      <div class="text-danger">{{ $message }}</div>
                                                                  @enderror
                                                                  </div>
                                                                </div>
                                                              </div> --}}
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="text-end"><input type="submit" value="Saqlash" class="btn btn-success me-3"><a class="btn btn-danger" href="{{route('mirobid_product.index')}}">Bekor qilish</a></div>
                      </div>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Simple Form Wizard</h4><span>Please Make sure fill all the filed before click on next button</span>
          </div>
          <div class="card-body">
            <form class="form-wizard" id="regForm" action="#" method="POST">
              <div class="tab">
                <div class="mb-3">
                  <label for="name">First Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Johan" required="required">
                </div>
                <div class="mb-3">
                  <label for="lname">Last Name</label>
                  <input class="form-control" id="lname" type="text" placeholder="Deo">
                </div>
                <div class="mb-3">
                  <label for="contact">Contact No.</label>
                  <input class="form-control" id="contact" type="number" placeholder="123456789">
                </div>
              </div>
              <div class="tab">
                <div class="mb-3 m-t-15">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input class="form-control" id="exampleInputcPassword1" type="password" placeholder="Enter again">
                </div>
              </div>
              <div class="tab">
                <div class="mb-3">
                  <label for="exampleFormControlInput1">Birthday:</label>
                  <input class="form-control" type="date">
                </div>
                <div class="mb-3">
                  <label class="control-label">Age</label>
                  <input class="form-control" placeholder="Age" type="number">
                </div>
                <div class="mb-3">
                  <label class="control-label">Have Passport</label>
                  <input class="form-control" placeholder="Yes/No" type="text">
                </div>
              </div>
              <div class="tab">
                <div class="mb-3">
                  <label class="control-label">Country</label>
                  <input class="form-control mt-1" type="text" placeholder="Country" required="required">
                </div>
                <div class="mb-3">
                  <label class="control-label">State</label>
                  <input class="form-control mt-1" type="text" placeholder="State" required="required">
                </div>
                <div class="mb-3">
                  <label class="control-label">City</label>
                  <input class="form-control mt-1" type="text" placeholder="City" required="required">
                </div>
              </div>
              <div>
                <div class="text-end btn-mb">
                  <button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
                  <button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form:-->
              <div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span></div>
              <!-- Circles which indicates the steps of the form:-->
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection
