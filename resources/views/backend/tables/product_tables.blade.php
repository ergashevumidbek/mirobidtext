@extends('backend.layouts.master')
@section('title')
Mahsulotlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Mahsulotlar qo'shish</h4>
            <a href="{{route('add_product')}}" class="btn btn-danger" style="float:right;" type="button">Mahsulot qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Mahsulot nomi</th>
                    <th>Qisqa tarif</th>
                    <th>Mahsulot turi</th>
                    <th>Banner rasm</th>
                    <th>Kontent rasmlar </th>
                    <th>Sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pro_data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->product_name}}</td>
                        <td>{{$value->pro_short_content}} </td>
                        <td>{{$value->product_type}} </td>
                        <td><img class="img-fluid table-avtar" src="{{asset('storage/'. $value->pro_banner_img)}}" alt=""></td>
                        <td>
                            <img class="img-fluid table-avtar" src="{{asset('storage/'. $value->pro_content_img)}}" alt="">
                        </td>
                        <td>{{$value->created_at}}</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="{{route('mirobid_product.edit', ['mirobid_product'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete">
                                <form action="{{route('mirobid_product.destroy', ['mirobid_product'=>$value->id])}}" method="post"
                                    onsubmit="return confirm('Rostdan ham o\'chirishni hohlaysizmi')"
                                    >
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="" style="outline-style: none; border-style:none;"><i class="icon-trash"></i></button>
                                </form>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    @endforeach


                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Mahsulot nomi</th>
                    <th>Qisqa tarif</th>
                    <th>Mahsulot turi</th>
                    <th>Banner rasm</th>
                    <th>Kontent rasmlar </th>
                    <th>Sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
