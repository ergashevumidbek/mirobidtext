@extends('backend.layouts.master')
@section('title')
Guvohnoma va sertifikatlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Guvohnoma va sertifikatlar</h4>
            <a href="{{route('add_sertificate')}}" class="btn btn-danger" style="float:right;" type="button">Gost yaratish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Gost nomi</th>
                    <th>Gost rasm</th>
                    <th>Gost tarif</th>
                    <th>Sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($serti_data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->gost_name}}</td>
                        <td><img class="img-fluid table-avtar" src="{{asset('storage/'.$value->gost_banner_img)}}" alt=""></td>
                        <td>{{$value->gost_label}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="{{route('sertificate.edit', ['sertificate'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete">
                                <form action="{{route('sertificate.destroy', ['sertificate'=>$value->id])}}" method="post"
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
                    <th>№</th>
                    <th>Gost nomi</th>
                    <th>Gost rasm</th>
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
