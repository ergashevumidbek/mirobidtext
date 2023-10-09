
@extends('backend.layouts.master')
@section('title')
Hodimlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Hodimlar</h4>
            <a href="{{route('create_staff')}}" class="btn btn-danger" style="float:right;" type="button">Hodim qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Rasm</th>
                    <th>Lavozim</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($staff_datas as $value )
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->staff_name}}</td>
                    <td> {{$value->staff_surname}}</td>
                    <td>{{$value->staff_profission}}</td>
                    <td><img class="img-fluid table-avtar" src="{{asset('storage/'. $value->staff_img)}}" alt=""></td>
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="{{route('mirobid_staff.edit', ['mirobid_staff'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#">
                            <form action="{{route('mirobid_staff.destroy', ['mirobid_staff'=>$value->id])}}" method="post"
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
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Rasm</th>
                    <th>Lavozim</th>
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
